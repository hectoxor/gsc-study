<?php

// Была создана как замена UniversitiesController  

class EduOrganizationsController extends AppController{

	public $uses = array('EduOrganization', 'Type', 'EduLanguage', 'Advan', 'LanguageCard', 'Review');
	public $components = array('Paginator');

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function admin_index(){
		$this->EduOrganization->locale = array('en', 'kz', 'ru');

		$data = $this->EduOrganization->find('all', array(
			'recursive' => '-1',
			'order' => 'EduOrganization.id DESC',
		));

		$types = array('' => 'Не выбрано', 'kurs' => 'Языковые курсы', 'srednee' => 'Среднее образование', 'visshee' => 'Высшее образование');
		
		$this->set(compact('data', 'paginator', 'types'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->EduOrganization->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->EduOrganization->locale = 'en';
		}else{
			$this->EduOrganization->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->EduOrganization->create();
			$data = $this->request->data['EduOrganization'];
			
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if(!isset($data['residence_img']['name']) || !$data['residence_img']['name']){
				unset($data['residence_img']);
			}

			if(empty($data['alias'])){
				$slug = Inflector::slug(mb_strtolower($this->request->data['EduOrganization']['title']), '-');
				$data[] = $this->request->data['EduOrganization'];
				$data[] = array('alias'=>$slug);
				$data = array_merge($data[0],$data[1]);

				//Проверка на уникальность alias	
				$check_alias = $this->EduOrganization->findByAlias($data['alias']);
				if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
			}else{
				$data['alias'] = str_replace(array('(', ')', ' ', ',', '.', '?', '!', '+'), '-', $data['alias']); //замена определенных символов
			}
			

			if($this->EduOrganization->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}

		$this->EduOrganization->Country->locale = 'ru';

		$countries = $this->EduOrganization->Country->find('list');

		$this->EduLanguage->locale = 'ru';

		$edu_langs = $this->EduLanguage->find('list');
		$this->set(compact('countries', 'brands', 'edu_langs'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->EduOrganization->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->EduOrganization->locale = 'en';
		}else{
			$this->EduOrganization->locale = 'ru';
		}


		if(is_null($id) || !(int)$id || !$this->EduOrganization->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->EduOrganization->findById($id);
		
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->EduOrganization->id = $id;

			$data1 = (isset($this->request->data['EduOrganization'])) ? $this->request->data['EduOrganization'] : array();
			
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if(!isset($data1['residence_img']['name']) || !$data1['residence_img']['name']){
				unset($data1['residence_img']);
			}

			$data1['id'] = $id;

			if($this->EduOrganization->save($data1)){
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
			$data = $this->request->data = $this->EduOrganization->read(null, $id);
		}
		
		$this->EduLanguage->locale = 'ru';
		$this->EduOrganization->Country->locale = 'ru';
		$this->Advan->locale = array('en', 'kz', 'ru');
		$this->LanguageCard->locale = array('en', 'kz', 'ru');
		$this->Review->locale = array('en', 'kz', 'ru');

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.edu_organization_id' => $id,
			),
			'order' => 'Advan.item_order DESC'
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.edu_organization_id' => $id,
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.edu_organization_id' => $id,
			),
			'order' => 'Review.id DESC',
		));

		$edu_langs = $this->EduLanguage->find('list');
		$countries = $this->EduOrganization->Country->find('list');	

		$this->set(compact('id', 'data', 'countries', 'edu_langs', 'advans', 'cards', 'reviews'));

	}

	public function admin_delete($id){
		$this->EduOrganization->locale = Configure::read('Config.language');

		if (!$this->EduOrganization->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->EduOrganization->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		$this->EduOrganization->locale = Configure::read('Config.language');
		$this->Advan->locale = Configure::read('Config.language');
		$this->Review->locale = Configure::read('Config.language');
		$this->LanguageCard->locale = Configure::read('Config.language');
		
		$data = $this->EduOrganization->findByAlias($alias);
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.edu_organization_id' => $data['EduOrganization']['id'],
			),
			'order' => 'Advan.item_order DESC',
		));

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.edu_organization_id' => $data['EduOrganization']['id'],
			),
			'order' => 'Review.id DESC',
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.edu_organization_id' => $data['EduOrganization']['id'],
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


		$title_for_layout = ($data['EduOrganization']['meta_title']) ? $data['EduOrganization']['meta_title'] : $data['EduOrganization']['title'];
		$meta['keywords'] = $data['EduOrganization']['keywords'];
		$meta['description'] = $data['EduOrganization']['description'];
		$this->set(compact('data', 'title_for_layout' ,'meta', 'id', 'bc', 'advans', 'reviews', 'info_card', 'edu_card', 'program_card'));
	}

}