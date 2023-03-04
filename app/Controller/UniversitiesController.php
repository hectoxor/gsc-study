<?php

class UniversitiesController extends AppController{

	public $uses = array('University', 'Type', 'EduLanguage', 'Advan', 'LanguageCard', 'Review');
	public $components = array('Paginator');

	public function beforeFilter(){
		parent::beforeFilter();
	}

	// public function index(){
	// 	// $this->University->locale = Configure::read('Config.language');
	// 	// $this->University->bindTranslation(array('title' => 'titleTranslation'));
	// 	$data = $this->University->find('all');
	// 	$title_for_layout = __('Продукты');
	// 	$this->set(compact('title_for_layout', 'data'));
	// }

	public function admin_index(){
		$this->University->locale = array('en', 'kz', 'ru');

		// $this->University->locale = array('ru', 'kz');
		// $this->University->bindTranslation(array('title' => 'titleTranslation'));
		// $this->University->bindTranslation(array(
		// 	'title' => 'titleTranslation'
		// ));

		// $this->Paginator->settings = array(
		// 	'recursive' => '-1',
		// 	'limit' => 20,
		// 	'order' => 'University.id DESC',
		// );

		// $data = $this->Paginator->paginate('University');

		$data = $this->University->find('all', array(
			'recursive' => '-1',
			'order' => 'University.id DESC',
		));

		$types = array('' => 'Не выбрано', 'kurs' => 'Языковые курсы', 'srednee' => 'Среднее образование', 'visshee' => 'Высшее образование');

		// $data = $this->University->find('all');
		
		$this->set(compact('data', 'paginator', 'types'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->University->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->University->locale = 'en';
		}else{
			$this->University->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->University->create();
			$data = $this->request->data['University'];
			
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if(!isset($data['residence_img']['name']) || !$data['residence_img']['name']){
				unset($data['residence_img']);

				$this->University->validator()->remove('residence_img');
			}



			// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			// 	$this->University->locale = 'kz';
			// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			// 	$this->University->locale = 'en';
			// }else{
			// 	$this->University->locale = 'ru';
			// }
			// $this->University->locale = 'ru';
			if(empty($data['alias'])){
				$slug = Inflector::slug(mb_strtolower($this->request->data['University']['title']), '-');
				$data[] = $this->request->data['University'];
				$data[] = array('alias'=>$slug);
				$data = array_merge($data[0],$data[1]);

				//Проверка на уникальность alias	
				$check_alias = $this->University->findByAlias($data['alias']);
				if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
			}else{
				$data['alias'] = str_replace(array('(', ')', ' ', ',', '.', '?', '!', '+'), '-', $data['alias']); //замена определенных символов
			}

			if( isset($data['edu_language_ids']) && $data['edu_language_ids'] ){
				$data['edu_language_ids'] = implode(',', $data['edu_language_ids']);
			}
			

			if($this->University->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// if(isset($this->request->data['type'])){
				// 	$l = $this->request->data['type'];
				// 	$id = $this->University->find('first', array(
				// 		'order' => array('University.id' => 'DESC')
				// 	));
				// 	for($i=0;$i<=count($l)-1;$i++){
				// 		$l_insert = "INSERT INTO `types_universities` (type_id,university_id) VALUES(".$l[$i].",".$id['University']['id'].") ";
				// 		$sql = $this->University->query($l_insert);
				// 	}
				// }
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}

		$this->University->Country->locale = 'ru';
		
			// $this->University->Category->locale = 'en';
		// $this->University->Brand->locale = 'ru';
		$countries = $this->University->Country->find('list');
		// $brands = $this->University->Brand->find('list');
		// $cat_t = $this->University->Category->find('threaded', array(
		// 	'recursive' => -1
		// ));
		$this->EduLanguage->locale = 'ru';

		$edu_langs = $this->EduLanguage->find('list');
		$this->set(compact('countries', 'brands', 'edu_langs'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->University->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->University->locale = 'en';
		}else{
			$this->University->locale = 'ru';
		}

		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 		$this->University->locale = 'kz';
		// 		// $this->Category->locale = 'kz';
		// 	}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 		$this->University->locale = 'en';
		// 		// $this->Category->locale = 'en';
		// 	}else{
		// 		$this->University->locale = 'ru';
		// 		// $this->Category->locale = 'ru';
		// 	}
			// $this->University->locale = 'ru';

		if(is_null($id) || !(int)$id || !$this->University->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->University->findById($id);

		$checked_langs = explode(',', $data['University']['edu_language_ids']);
		
		// debug($data);
		// die;
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->University->id = $id;
			// $this->University->locale = Configure::read('Config.languages');
			// debug($this->University->locale);
			// debug($this->request->data);
			$data1 = (isset($this->request->data['University'])) ? $this->request->data['University'] : array();
			
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if(!isset($data1['residence_img']['name']) || !$data1['residence_img']['name']){
				unset($data1['residence_img']);
			}
			// debug($data1);die;
			// foreach ($data1 as $key => $value) {
			//     if(empty($value)) unset($data1[$key]);
			// }

			$data1['id'] = $id;

			if( isset($data1['edu_language_ids']) && $data1['edu_language_ids'] ){
				$data1['edu_language_ids'] = implode(',', $data1['edu_language_ids']);
			}

			// if(isset($this->request->data['fabricator'])){
			// 	$f = $this->request->data['fabricator'];
			// 	$this->University->query("DELETE FROM `fabricators_products` WHERE `product_id`=$id");
			// 	for($i=0;$i<=count($f)-1;$i++){
						
			// 		$f_insert = "INSERT INTO `fabricators_products` (fabricator_id,product_id) VALUES(".$f[$i].",".$id.") ";
			// 		$sql = $this->University->query($f_insert);
					
			// 	}
			// }

			if($this->University->save($data1)){

				// if(isset($this->request->data['type'])){
				// 	$l = $this->request->data['type'];
				// 	$this->University->query("DELETE FROM `types_universities` WHERE `university_id`=$id");
				// 	for($i=0;$i<=count($l)-1;$i++){
				// 		$l_insert = "INSERT INTO `types_universities` (type_id,university_id) VALUES(".$l[$i].",".$id.") ";
				// 		$sql = $this->University->query($l_insert);
				// 	}
				// }

				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			// $this->University->locale = 'ru';
			$data = $this->request->data = $this->University->read(null, $id);
		}
		
		$this->EduLanguage->locale = 'ru';
		$this->University->Country->locale = 'ru';
		$this->Advan->locale = array('en', 'kz', 'ru');
		$this->LanguageCard->locale = array('en', 'kz', 'ru');
		$this->Review->locale = array('en', 'kz', 'ru');

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.university_id' => $id,
			),
			'order' => 'Advan.item_order DESC'
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.university_id' => $id,
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.university_id' => $id,
			),
			'order' => 'Review.id DESC',
		));

		$edu_langs = $this->EduLanguage->find('list');
		$countries = $this->University->Country->find('list');	

		$this->set(compact('id', 'data', 'countries', 'edu_langs', 'advans', 'cards', 'reviews', 'checked_langs'));

	}

	public function admin_delete($id){
		$this->University->locale = Configure::read('Config.language');

		if (!$this->University->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->University->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		$this->University->locale = Configure::read('Config.language');
		$this->Advan->locale = Configure::read('Config.language');
		$this->Review->locale = Configure::read('Config.language');
		$this->LanguageCard->locale = Configure::read('Config.language');
		
		$data = $this->University->findByAlias($alias);
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.university_id' => $data['University']['id'],
			),
			'order' => 'Advan.item_order DESC',
		));

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.university_id' => $data['University']['id'],
			),
			'order' => 'Review.id DESC',
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.university_id' => $data['University']['id'],
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$edu_card = [];
		$program_card = [];
		$info_card = [];
		
		foreach( $cards as $card_item ){
			if( $card_item['LanguageCard']['type'] == 'edu' ){
				$edu_card[] = $card_item;
			} elseif( $card_item['LanguageCard']['type'] == 'program' ){
				$program_card[] = $card_item;
			} else{
				$info_card[] = $card_item;
			}
		}


		// $parent_id = $data['Category']['parent_id'];

		// $parent_category = $this->University->Category->findById($parent_id);
		// $link = $parent_category['Category']['alias'];

		// debug($category);die;
		// $this->University->locale = Configure::read('Config.language');
		// $this->University->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		
		// $related_products = $this->University->find('all', array(
		// 	'conditions' => array(
		// 		'University.category_id' => $data['University']['category_id'], 'University.id !=' => $data['University']['id']
		// 		)
		// ));
		// debug($data);die;
		$title_for_layout = ($data['University']['meta_title']) ? $data['University']['meta_title'] : $data['University']['title'];
		$meta['keywords'] = $data['University']['keywords'];
		$meta['description'] = $data['University']['description'];
		// $bc = array(array('link' => '/category/' . $parent_category['Category']['alias'], 'title' => $parent_category['Category']['title']), array('link' => '', 'title' => $title_for_layout));
		$this->set(compact('data', 'title_for_layout' ,'meta', 'id', 'bc', 'advans', 'reviews', 'info_card', 'edu_card', 'program_card'));
	}

}