<?php
// App::uses('CakeEmail', 'Network/Email');

class CoursesController extends AppController {

	public $uses = array('Course', 'Page', 'Review');
	
	public function beforeFilter(){
		parent::beforeFilter();
	}   

	public function index(){
		$this->Course->locale = Configure::read('Config.language');
		$this->Page->locale = Configure::read('Config.language');

		$data = $this->Course->find('all');

		$page = $this->Page->findById(2);
		$title_for_layout = ($page['Page']['meta_title']) ? $page['Page']['meta_title'] : $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];

		$this->set(compact('data', 'meta', 'title_for_layout'));
	}


	public function view($alias = null){
		$this->Course->locale = Configure::read('Config.language');
		$this->Review->locale = Configure::read('Config.language');
		
		// $this->News->locale = Configure::read('Config.language');
		// $this->Course->locale = Configure::read('Config.language');
		// $this->Course->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		
		if(is_null($alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$data = $this->Course->findByAlias($alias);
		
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.course_id' => $data['Course']['id'],
			),
			'order' => 'Review.id DESC',
		));

		// $news = $this->News->find('all', array(
		// 	'order' => array('News.date' => 'DESC'),
		// 	'limit' => 5
		// ));
		$title_for_layout = ($data['Course']['meta_title']) ? $data['Course']['meta_title'] : $data['Course']['title'];
		$meta['keywords'] = $data['Course']['keywords'];
		$meta['description'] = $data['Course']['description'];
		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$this->set(compact('data', 'title_for_layout', 'meta', 'bc', 'reviews'));
	}
	

	public function admin_index(){
		$this->Course->locale = array('en', 'kz', 'ru');

		// $this->Course->locale = array('kz', 'ru', 'kk');
		// $this->Course->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Course->find('all', array(
			'fields' => array('id', 'title', 'alias')
		));
		
		
		$this->set(compact('data'));
	}

	public function admin_edit($page_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Course->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Course->locale = 'en';
		}else{
			$this->Course->locale = 'ru';
		}
		
		if(is_null($page_id) || !(int)$page_id || !$this->Course->exists($page_id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Course->findById($page_id);
		if(!$page_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Course->id = $page_id;
			// $this->Course->locale = Configure::read('Config.languages');
			// debug($this->Course->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Course'];

			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			// debug($data1);
			$data1['id'] = $page_id;
			if($this->Course->save($data1)){
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
			// $this->Course->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Course->read(null, $page_id);
		}
		$list = $this->Course->find('list', array(
			//'conditions' => array('Course.parent_id' => 0)
		));

		$this->Review->locale = array('en', 'kz', 'ru');

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.course_id' => $page_id,
			),
			'order' => 'Review.id DESC',
		));
		
		$this->set(compact('page_id', 'data', 'list', 'reviews'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Course->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Course->locale = 'en';
		}else{
			$this->Course->locale = 'ru';
		}
		
		if($this->request->is('post')){
			$this->Course->create();
			$data = $this->request->data['Course'];
			// debug($data);
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			//Создаем alias
			$slug = Inflector::slug(mb_strtolower($this->request->data['Course']['title']), '-');
			$data[] = $this->request->data['Course'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			// debug($data);

			//Проверка на уникальность alias	
			$check_alias = $this->Course->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
				
			
			if($this->Course->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				
				
				return $this->redirect($this->referer());
				// $redirect_url = '/admin/pages/edit/'.$new_page['Course']['id'].'?lang=ru';
				// return $this->redirect($redirect_url);
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
	}

	public function admin_delete($id){
		$this->Course->locale = Configure::read('Config.language');

		if (!$this->Course->exists($id)) {
			throw new NotFoundException('Такой статьи нет');
		}
		if($this->Course->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}
