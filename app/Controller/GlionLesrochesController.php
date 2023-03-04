<?php

class GlionLesrochesController extends AppController{

	public $uses = array('GlionLesroche', 'Advan', 'LanguageCard');
	public $components = array('Paginator');

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function admin_index(){

		$this->GlionLesroche->locale = array('en', 'kz', 'ru');

		$this->Paginator->settings = array(
			'recursive' => '-1',
			'limit' => 30,
			'order' => 'GlionLesroche.item_order DESC',
		);

		$data = $this->Paginator->paginate('GlionLesroche');

		$types = array('' => 'Не выбрано', 'glion' => 'Glion', 'les_roches' => 'Les Roches');
		
		$this->set(compact('data', 'paginator', 'types'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->GlionLesroche->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->GlionLesroche->locale = 'en';
		}else{
			$this->GlionLesroche->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->GlionLesroche->create();
			$data = $this->request->data['GlionLesroche'];
			
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			if(empty($data['alias'])){
				$slug = Inflector::slug(mb_strtolower($this->request->data['GlionLesroche']['title']), '-');
				$data[] = $this->request->data['GlionLesroche'];
				$data[] = array('alias'=>$slug);
				$data = array_merge($data[0],$data[1]);

				//Проверка на уникальность alias	
				$check_alias = $this->GlionLesroche->findByAlias($data['alias']);
				if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
			}else{
				$data['alias'] = str_replace(array('(', ')', ' ', ',', '.', '?', '!', '+'), '-', $data['alias']); //замена определенных символов
			}
			

			if($this->GlionLesroche->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$types = array('glion' => 'Glion', 'les_roches' => 'Les Roches');
		$this->set(compact('types'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->GlionLesroche->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->GlionLesroche->locale = 'en';
		}else{
			$this->GlionLesroche->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->GlionLesroche->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->GlionLesroche->findById($id);


		if($this->request->is(array('post', 'put'))){
			$this->GlionLesroche->id = $id;

			$data1 = (isset($this->request->data['GlionLesroche'])) ? $this->request->data['GlionLesroche'] : array();
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			$data1['id'] = $id;

			if($this->GlionLesroche->save($data1)){
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
			$data = $this->request->data = $this->GlionLesroche->read(null, $id);
		}

		$this->Advan->locale = array('en', 'kz', 'ru');
		$this->LanguageCard->locale = array('en', 'kz', 'ru');

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.glion_lesroche_id' => $id,
			),
			'order' => 'Advan.item_order DESC'
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.glion_lesroche_id' => $id,
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$types = array('glion' => 'Glion', 'les_roches' => 'Les Roches');

		$this->set(compact('id', 'data', 'types', 'advans', 'cards'));
	}

	public function admin_delete($id){
		$this->GlionLesroche->locale = Configure::read('Config.language');

		if (!$this->GlionLesroche->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->GlionLesroche->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}


	public function index(){
		$this->GlionLesroche->locale = Configure::read('Config.language');

		$conditions = [];
		if( isset($_GET['type']) && $_GET['type'] && ($_GET['type'] == 'glion' || $_GET['type'] == 'les_roches') ){
			$conditions[] = array('GlionLesroche.type' => $_GET['type']);
		}

		$data = $this->GlionLesroche->find('all', array(
			'conditions' => $conditions,
			'order' => 'GlionLesroche.item_order DESC',
		));

		$bc = array(array('link' => '', 'title' => 'Университеты Glion & Les Roches' ));

		$title_for_layout = 'Университеты Glion & Les Roches';

		$h1_text = 'Университет Glion & Les Roches Institute of Higher Education';

		if( $_GET['type'] == 'glion' ){
			$title_for_layout = 'Университеты Glion';
			$h1_text = 'Университет Glion Institute of Higher Education';
		} elseif( $_GET['type'] == 'les_roches' ){
			$title_for_layout = 'УниверситетыLes Roches';
			$h1_text = 'Университет Les Roches Institute of Higher Education';
		}

		$this->set( compact('data', 'bc', 'title_for_layout', 'h1_text') );
	}

	public function view($alias){
		$this->GlionLesroche->locale = Configure::read('Config.language');
		$this->Advan->locale = Configure::read('Config.language');
		$this->LanguageCard->locale = Configure::read('Config.language');

		$cur_lang = '/'.Configure::read('Config.language');
		if( $cur_lang == '/ru' ){
			$cur_lang = '';
		}

		$data = $this->GlionLesroche->findByAlias($alias);
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}


		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.glion_lesroche_id' => $data['GlionLesroche']['id'],
			),
			'order' => 'Advan.item_order DESC'
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.glion_lesroche_id' => $data['GlionLesroche']['id'],
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$cards_univer = [];
		$cards_campus = [];
		foreach( $cards as $item ){
			if( $item['LanguageCard']['type'] == 'univer' ){
				$cards_univer[] = $item;
			} elseif( $item['LanguageCard']['type'] == 'campus' ){
				$cards_campus[] = $item;
			}
		}


		$title_for_layout = ($data['GlionLesroche']['meta_title']) ? $data['GlionLesroche']['meta_title'] : $data['GlionLesroche']['title'];
		$meta['keywords'] = $data['GlionLesroche']['keywords'];
		$meta['description'] = $data['GlionLesroche']['description'];

		$edu_title = '';
		if( $data['GlionLesroche']['type'] == 'glion' ){
			$edu_title = 'Университеты Glion';
		} elseif( $data['GlionLesroche']['type'] == 'les_roches' ){
			$edu_title = 'Университеты Les Roches';
		}

		$bc = array(
			array('link' => $cur_lang.'/higher_educations?type=' . $data['GlionLesroche']['type'], 'title' => $edu_title),
			array('link' => '', 'title' => $title_for_layout ),
		);

		$this->set(compact('data', 'title_for_layout', 'meta', 'bc', 'advans', 'cards_univer', 'cards_campus'));
	}

}