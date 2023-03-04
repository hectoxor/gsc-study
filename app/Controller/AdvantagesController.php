<?php

class AdvantagesController extends AppController{

	public $components = array('Paginator');

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	
	public function index(){
		
		// $this->Advantage->locale = Configure::read('Config.language');
		// $this->Advantage->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Advantage->find('all', array(
			'conditions' => array('Advantage.active' => 1),
			'order' => array('Advantage.priority' => 'DESC')
		));
		// $this->Paginator->settings = array(
		// 	'order' => array('Advantage.priority' => 'DESC'),
		// 	'limit' => 10,
		// );
		$bc = array(array('link' => '', 'title' => 'Преимущества'));
		// $news = $this->Paginator->paginate('Advantage');
		$title_for_layout = __('Преимущества');
		$this->set(compact('title_for_layout', 'data', 'bc'));
	}

	public function admin_index(){
		// $this->Advantage->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Advantage->find('all', array(
			'order' => array('Advantage.id' => 'desc')
			));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 		$this->Advantage->locale = 'kz';
		// 	}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 		$this->Advantage->locale = 'en';
		// 	}else{
		// 		$this->Advantage->locale = 'ru';
		// 	}
		if($this->request->is('post')){
			$this->Advantage->create();
			$data = $this->request->data['Advantage'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			// $slug = Inflector::slug(mb_strtolower($this->request->data['Advantage']['title']), '-');
			// $data[] = $this->request->data['Advantage'];
			// $data[] = array('alias'=>$slug);
			// $data = array_merge($data[0],$data[1]);

			// //Проверка на уникальность alias	
			// $check_alias = $this->Advantage->findByAlias($data['alias']);
			// if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			
			// $this->Advantage->locale = 'ru';
			if($this->Advantage->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// $new_page = $this->Advantage->findByAlias($data['alias']);
				// if($this->Advantage->locale == 'kz'){
				// 	$fields = array('title', 'body', 'keywords', 'description');
				// 	$this->change_to_lat('Advantage', 'news', $fields, $data);
				// }
				
				return $this->redirect($this->referer() . "#advantages");
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление услуги';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Advantage->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 	$this->Advantage->locale = 'kz';
		// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 	$this->Advantage->locale = 'en';
		// }else{
		// 	$this->Advantage->locale = 'ru';
		// }

		$data = $this->Advantage->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Advantage->id = $id;
			$data1 = $this->request->data['Advantage'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data1['id'] = $id;
			
			
			if($this->Advantage->save($data1)){
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
			//$this->Advantage->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Advantage->read(null, $id);
		}

		$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		if (!$this->Advantage->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Advantage->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		
		//$this->Advantage->locale = Configure::read('Config.language');
		
		$data = $this->Advantage->findByAlias($alias);

		$id = $data['Advantage']['id'];
		// $others = $this->Advantage->find('all', array(
		// 	'conditions' => array('Advantage.id !=' => $id),
		// 	'order' => array('Advantage.priority' => 'DESC'),
		// 	'limit' => 3
		// ));
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = ($data['Advantage']['meta_title']) ? $data['Advantage']['meta_title'] : $data['Advantage']['title'];
		$bc = array(array('link' => '/services', 'title' => 'Услуги'), array('link' => '', 'title' => $title_for_layout));
		$meta['keywords'] = $data['Advantage']['keywords'];
		$meta['description'] = $data['Advantage']['description'];
		$this->set(compact('data','title_for_layout' ,'meta', 'others', 'bc'));
	}
	
}