<?php

class ContactsController extends AppController{
	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	
	public function index(){
		$this->Contact->locale = Configure::read('Config.language');
		// $this->Contact->bindTranslation(array('title' => 'titleTranslation'));

		$conditions = ['Contact.active' => 1];

		if( isset($_GET['type']) && ($_GET['type'] == 'filial' || $_GET['type'] == 'school' || $_GET['type'] == 'education') ){
			$conditions[] = ['Contact.type' => $_GET['type']];
		} else{
			$conditions[] = ['Contact.type' => 'filial'];
		}
		
		$data = $this->Contact->find('all', array(
			'conditions' => $conditions,
			'order' => array('Contact.priority' => 'DESC')
		));
		$cities = $this->Contact->City->find('all', array(
			'conditions' => array('City.active' => 1),
			'order' => array('City.priority' => 'DESC')
		));
		// debug($cities);die;
		$title_for_layout = __('Контакты');
		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$this->set(compact('title_for_layout', 'data', 'bc', 'cities'));
	}

	public function admin_index(){
		$this->Contact->locale = array('ru', 'kz', 'en');
		// $this->Contact->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Contact->find('all', array(
			'order' => array('Contact.priority' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Contact->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Contact->locale = 'en';
		}else{
			$this->Contact->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Contact->create();
			$data = $this->request->data['Contact'];
			
			
			if(!isset($data['img']['name']) || empty($data['img']['name'])){
				unset($data['img']);
			}
			if($this->Contact->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$cities = $this->Contact->City->find('list');
		// $first_element = array('0' => 'Выберите город');
		// array_unshift($first_element, $cities);
		// debug($cities);
		$title_for_layout = 'Добавление контакта';
		$this->set(compact('title_for_layout', 'cities'));

	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Contact->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Contact->locale = 'en';
		}else{
			$this->Contact->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Contact->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		

		$data = $this->Contact->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Contact->id = $id;
			$data1 = $this->request->data['Contact'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->Contact->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
				
				
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$this->set(compact('id', 'data'));
		}
		$cities = $this->Contact->City->find('list');
		$this->set(compact('id', 'data', 'cities'));

	}

	public function admin_delete($id){
		$this->Contact->locale = Configure::read('Config.language');

		if (!$this->Contact->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Contact->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		
		$this->Contact->locale = Configure::read('Config.language');
		
		$data = $this->Contact->findById($id);
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		
		
		$title_for_layout = $data['Contact']['title'];
		// $meta['keywords'] = $data['Contact']['keywords'];
		$meta['description'] = $data['Contact']['description'];
		$this->set(compact('data','title_for_layout' ,'meta'));
	}
	
}