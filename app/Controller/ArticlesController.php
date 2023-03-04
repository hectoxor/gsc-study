<?php

class ArticlesController extends AppController{

	public $components = array('Paginator');

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	
	public function index(){
		$this->Article->locale = Configure::read('Config.language');
		
		$this->Paginator->settings = array(
			// 'conditions' => array('Article.city_id' => array($city_id, 0)),
			'order' => array('Article.id' => 'DESC'),
			'limit' => 10,
		);
		$bc = array(array('link' => '', 'title' => 'Статьи'));
		$news = $this->Paginator->paginate('Article');
		$title_for_layout = __('Статьи');
		$canonical = '/articles';
		$this->set(compact('title_for_layout', 'news', 'bc', 'canonical'));
	}

	public function admin_index(){
		$this->Article->locale = array('en', 'kz', 'ru');

		// $this->Article->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Article->find('all', array(
			'order' => array('Article.id' => 'desc')
			));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Article->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Article->locale = 'en';
		}else{
			$this->Article->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Article->create();
			$data = $this->request->data['Article'];
			if(!$data['img']['name']){
				unset($data['img']);
			}
			// var_dump($data);die;

			$slug = Inflector::slug(mb_strtolower($this->request->data['Article']['title']), '-');
			$data[] = $this->request->data['Article'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);

			//Проверка на уникальность alias	
			$check_alias = $this->Article->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			
			// $this->Article->locale = 'ru';
			if($this->Article->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// $new_page = $this->Article->findByAlias($data['alias']);
				// if($this->Article->locale == 'kz'){
				// 	$fields = array('title', 'body', 'keywords', 'description');
				// 	$this->change_to_lat('Article', 'news', $fields, $data);
				// }
				
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление новости';
		// $cities = $this->Article->City->find('list');
		// array_unshift($cities,  'Глобальный');
		// $first_element = array('0' => 'Выберите город');
		// array_unshift($first_element, $cities);
		// debug($cities);
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Article->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Article->locale = 'en';
		}else{
			$this->Article->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Article->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 	$this->Article->locale = 'kz';
		// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 	$this->Article->locale = 'en';
		// }else{
		// 	$this->Article->locale = 'ru';
		// }

		$data = $this->Article->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Article->id = $id;
			$data1 = $this->request->data['Article'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data1['id'] = $id;
			
			
			if($this->Article->save($data1)){
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
			//$this->Article->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Article->read(null, $id);
		}
		// $cities = $this->Article->City->find('list');
		// array_unshift($cities,  'Глобальный');
		$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		$this->Article->locale = Configure::read('Config.language');

		if (!$this->Article->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Article->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		$this->Article->locale = Configure::read('Config.language');
		
		$post = $this->Article->findByAlias($alias);
		debug($post);
		$id = $post['Article']['id'];
		$other_news = $this->Article->find('all', array(
			'conditions' => array('Article.id !=' => $id),
			'order' => array('Article.date' => 'DESC'),
			'limit' => 3
		));
		// debug($other_news);die;
		if(!$post){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = $post['Article']['title'];
		$bc = array(array('link' => '/articles', 'title' => 'Статьи'), array('link' => '', 'title' => $title_for_layout));
		$meta['keywords'] = $post['Article']['keywords'];
		$meta['description'] = $post['Article']['description'];
		$meta['og_image'] = 'articles/' . $post['Article']['img'];
		$canonical = '/article/' . $post['Article']['alias'];
		$this->set(compact('post','title_for_layout' ,'meta', 'other_news', 'bc', 'canonical'));
	}
	
}