<?php

class ReviewsController extends AppController{

	public $uses = array('Review', 'City');

	public $components = array('Paginator');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->Review->locale = Configure::read('Config.language');
		$this->City->locale = Configure::read('Config.language');
		
		// $data = $this->Review->find('all', array(
		// 	// 'order' => array('Review.date DESC, Review.position DESC'),
		// 	//'conditions' => array($filter, array('Review.anons' => 0)),
		// 	'order' => array('Review.id DESC'),
		// 	// 'limit' => 15,
		// 	// 'recursive' => -1
		// ));

		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}
		$city = $this->City->findByAlias($alias);
		$city_id = $city['City']['id'];

		$this->Paginator->settings = array(
			'conditions' => array('Review.city_id' => array($city_id, 0)),
			'order' => array('Review.id' => 'DESC'),
			'limit' => 2,
		);

		$data = $this->Paginator->paginate('Review');
		
		$title_for_layout = __('Отзывы');

		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$page = $title_for_layout;

		$this->set(compact('data', 'title_for_layout', 'bc', 'page'));
	}

	public function admin_index(){
			$this->Review->locale = array('en', 'kz', 'ru');

			// $this->Review->locale = array('ru', 'kz');
			// $this->Review->bindTranslation(array('title' => 'titleTranslation'));
			$data = $this->Review->find('all', array(
				'order' => array("Review.id" => 'desc')
			));
			// debug($data);
			// die;
			$this->set(compact('data'));
		}

	public function admin_add(){

		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Review->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Review->locale = 'en';
		}else{
			$this->Review->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Review->create();
			$data = $this->request->data['Review'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->Review->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$cities = $this->Review->City->find('list');

		$title_for_layout = 'Добавление отзыва';
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){

		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Review->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Review->locale = 'en';
		}else{
			$this->Review->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Review->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->Review->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Review->id = $id;
			$data1 = $this->request->data['Review'];
			
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data1['id'] = $id;
			
			if($this->Review->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			// $this->Review->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Review->read(null, $id);
		}
		$cities = $this->Review->City->find('list');
		$this->set(compact('id', 'data', 'cities'));

	}

	public function admin_delete($id){
		$this->Review->locale = Configure::read('Config.language');

		if (!$this->Review->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->Review->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function send(){

		if($this->request->is('post')){
			$this->Review->create();
			$data = $this->request->data['Review'];
			
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if($this->Review->save($data)){
				$this->Session->setFlash('Ваш отзыв успешно отрпавлен. Спасибо!', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
		

		$title_for_layout = 'Добавление отзыва';
		$this->set(compact('title_for_layout'));
	}

}