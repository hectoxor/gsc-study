<?php

class NewsController extends AppController{

	public $components = array('Paginator');

	public $uses = array('News', 'Photo');

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	
	public function index(){
		
		$this->News->locale = Configure::read('Config.language');
		// $this->News->bindTranslation(array('title' => 'titleTranslation'));
		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}
		$city = $this->City->findByAlias($alias);
		$city_id = $city['City']['id'];
		$this->Paginator->settings = array(
			'conditions' => array('News.city_id' => array($city_id, 0)),
			'order' => array('News.id' => 'DESC'),
			'limit' => 9,
		);
		$bc = array(array('link' => '', 'title' => 'Новости'));
		$news = $this->Paginator->paginate('News');
		$title_for_layout = __('Новости');
		$this->set(compact('title_for_layout', 'news', 'bc'));
	}

	public function admin_index(){
		$this->News->locale = array('en', 'kz', 'ru');
		
		// $this->News->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->News->find('all', array(
			'order' => array('News.id' => 'desc')
			));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->News->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->News->locale = 'en';
		}else{
			$this->News->locale = 'ru';
		}

		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 		$this->News->locale = 'kz';
		// 	}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 		$this->News->locale = 'en';
		// 	}else{
		// 		$this->News->locale = 'ru';
		// 	}
		if($this->request->is('post')){
			$this->News->create();
			$data = $this->request->data['News'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			$slug = Inflector::slug(mb_strtolower($this->request->data['News']['title']), '-');
			$data[] = $this->request->data['News'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);

			//Проверка на уникальность alias	
			$check_alias = $this->News->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			
			// $this->News->locale = 'ru';
			if($this->News->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// $new_page = $this->News->findByAlias($data['alias']);
				// if($this->News->locale == 'kz'){
				// 	$fields = array('title', 'body', 'keywords', 'description');
				// 	$this->change_to_lat('News', 'news', $fields, $data);
				// }
				
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление новости';
		$cities = $this->News->City->find('list');
		array_unshift($cities,  'Глобальный');
		// $first_element = array('0' => 'Выберите город');
		// array_unshift($first_element, $cities);
		// debug($cities);
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->News->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->News->locale = 'en';
		}else{
			$this->News->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->News->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 	$this->News->locale = 'kz';
		// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 	$this->News->locale = 'en';
		// }else{
		// 	$this->News->locale = 'ru';
		// }

		$data = $this->News->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->News->id = $id;
			$data1 = $this->request->data['News'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data1['id'] = $id;
			
			
			if($this->News->save($data1)){
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
			//$this->News->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->News->read(null, $id);
		}

		$photos = $this->Photo->find('all', array(
			'conditions' => array(
				'Photo.news_id' => $id,
			),
			'order' => array('Photo.item_order' => 'DESC'),
		));

		$cities = $this->News->City->find('list');
		array_unshift($cities,  'Глобальный');

		$this->set(compact('id', 'data', 'cities', 'photos'));

	}

	public function admin_delete($id){
		$this->News->locale = Configure::read('Config.language');

		if (!$this->News->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->News->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		
		$this->News->locale = Configure::read('Config.language');
		
		$post = $this->News->findByAlias($alias);

		$id = $post['News']['id'];
		$other_news = $this->News->find('all', array(
			'conditions' => array('News.id !=' => $id),
			'order' => array('News.date' => 'DESC'),
			'limit' => 3
		));
		// debug($other_news);die;
		if(!$post){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = $post['News']['title'];
		$bc = array(array('link' => '/news', 'title' => 'Новости'), array('link' => '', 'title' => $title_for_layout));
		$meta['keywords'] = $post['News']['keywords'];
		$meta['description'] = $post['News']['description'];
		$meta['og_image'] = 'news/' . $post['News']['img'];
		$canonical = str_replace(array(
			'?city=nur-sultan', '&city=nur-sultan',
			'?city=aktau', '&city=aktau',
			'?city=pavlodar', '&city=pavlodar',
			'?city=karaganda', '&city=karaganda',
			'?city=almaty', '&city=almaty'),
			 '', $_SERVER['REQUEST_URI']);

		$photos = $this->Photo->find('all', array(
			'conditions' => array(
				'Photo.news_id' => $id,
			),
			'order' => array('Photo.item_order' => 'DESC'),
		));

		$this->set(compact('post','title_for_layout' ,'meta', 'other_news', 'bc', 'canonical', 'photos'));
	}
	
}