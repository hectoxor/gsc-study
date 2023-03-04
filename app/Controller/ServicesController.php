<?php

class ServicesController extends AppController{

	public $components = array('Paginator');

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	
	public function index(){
		
		// $this->Service->locale = Configure::read('Config.language');
		// $this->Service->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Service->find('all', array(
			'conditions' => array('Service.active' => 1),
			'order' => array('Service.priority' => 'DESC')
		));
		// $this->Paginator->settings = array(
		// 	'order' => array('Service.priority' => 'DESC'),
		// 	'limit' => 10,
		// );
		$bc = array(array('link' => '', 'title' => 'Услуги'));
		// $news = $this->Paginator->paginate('Service');
		$title_for_layout = __('Услуги');
		$this->set(compact('title_for_layout', 'data', 'bc'));
	}

	public function admin_index(){
		// $this->Service->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Service->find('all', array(
			'order' => array('Service.id' => 'desc')
			));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 		$this->Service->locale = 'kz';
		// 	}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 		$this->Service->locale = 'en';
		// 	}else{
		// 		$this->Service->locale = 'ru';
		// 	}
		if($this->request->is('post')){
			$this->Service->create();
			$data = $this->request->data['Service'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			// $slug = Inflector::slug(mb_strtolower($this->request->data['Service']['title']), '-');
			// $data[] = $this->request->data['Service'];
			// $data[] = array('alias'=>$slug);
			// $data = array_merge($data[0],$data[1]);

			// //Проверка на уникальность alias	
			// $check_alias = $this->Service->findByAlias($data['alias']);
			// if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			
			// $this->Service->locale = 'ru';
			if($this->Service->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// $new_page = $this->Service->findByAlias($data['alias']);
				// if($this->Service->locale == 'kz'){
				// 	$fields = array('title', 'body', 'keywords', 'description');
				// 	$this->change_to_lat('Service', 'news', $fields, $data);
				// }
				
				return $this->redirect($this->referer() . "#services");
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление услуги';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Service->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 	$this->Service->locale = 'kz';
		// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 	$this->Service->locale = 'en';
		// }else{
		// 	$this->Service->locale = 'ru';
		// }

		$data = $this->Service->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Service->id = $id;
			$data1 = $this->request->data['Service'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data1['id'] = $id;
			
			
			if($this->Service->save($data1)){
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
			//$this->Service->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Service->read(null, $id);
		}

		$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		if (!$this->Service->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Service->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		
		//$this->Service->locale = Configure::read('Config.language');
		
		$data = $this->Service->findByAlias($alias);

		$id = $data['Service']['id'];
		// $others = $this->Service->find('all', array(
		// 	'conditions' => array('Service.id !=' => $id),
		// 	'order' => array('Service.priority' => 'DESC'),
		// 	'limit' => 3
		// ));
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = ($data['Service']['meta_title']) ? $data['Service']['meta_title'] : $data['Service']['title'];
		$bc = array(array('link' => '/services', 'title' => 'Услуги'), array('link' => '', 'title' => $title_for_layout));
		$meta['keywords'] = $data['Service']['keywords'];
		$meta['description'] = $data['Service']['description'];
		$this->set(compact('data','title_for_layout' ,'meta', 'others', 'bc'));
	}
	
}