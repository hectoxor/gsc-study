<?php

class CountriesController extends AppController{
	public $uses = array('Country', 'University', 'Type');
	// public $components = array('Paginator');

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	
	public function index($alias){
		$this->Country->locale = Configure::read('Config.language');
		
		$data = $this->Country->findByAlias($alias);
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		$id = $data['Country']['id'];
		// $projects = $this->Project->find('all', array(
		// 	'conditions' => array('Project.category_project_id' => $id)
		// ));
		// debug($data);
		// $others = $this->Country->find('all', array(
		// 	'conditions' => array('Country.id !=' => $id),
		// 	'order' => array('Country.priority' => 'DESC'),
		// 	'limit' => 3
		// ));
		
		$title_for_layout = $data['Country']['title'];
		$type = '';
		if(isset($_GET['type']) && !empty($_GET['type'])){
			$type = $_GET['type'];
		}

		if($type == 'yazykovye-kursy'){
			$title_for_layout = ($data['Country']['meta_title_magistratura']) ? $data['Country']['meta_title_magistratura'] : $data['Country']['title'];
			$type_id = 1;
		}

		if($type == 'srednee-obrazovanie'){
			$title_for_layout = ($data['Country']['meta_title_mba']) ? $data['Country']['meta_title_mba'] : $data['Country']['title'];
			$type_id = 2;
		}

		if($type == 'vuz'){
			$title_for_layout = ($data['Country']['meta_title_vuz']) ? $data['Country']['meta_title_vuz'] : $data['Country']['title'];
			$type_id = 3;
			$canonical = '/country/' . $alias . '?type=vuz';
		}

		// $types = $this->Type->find('list');
		$temp_query = $this->Country->query("SELECT * FROM types_universities WHERE type_id = $type_id");
		$temp_uni_ids =array();
		foreach($temp_query as $val){
			$temp_uni_ids[] = $val['types_universities']['university_id'];
		}
		$final_univers = $this->University->find('all', array(
			'conditions' => array(array('University.country_id' => $id), array('University.id' => $temp_uni_ids)),
			'recursive' => -1
		));
		// if(isset($_GET['nur'])){
		// 	echo "<pre>";
		// 	var_dump($final_univers);
		// 	echo "</pre>";
		// 	die;
		// }
		// $univers = $this->University->find()
		// $title_for_layout = ($data['Country']['meta_title']) ? $data['Country']['meta_title'] : $data['Country']['title'];
		$bc = array(array('link' => '', 'title' => $data['Country']['title']));
		$meta['keywords'] = $data['Country']['keywords'];
		$meta['description'] = $data['Country']['description'];

		$this->set(compact('data','title_for_layout' ,'meta', 'bc', 'alias', 'final_univers', 'canonical'));
	}

	public function admin_index(){
		$this->Country->locale = array('en', 'kz', 'ru');

		// $this->Country->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Country->find('all', array(
			'order' => array('Country.id' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Country->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Country->locale = 'en';
		}else{
			$this->Country->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Country->create();
			$data = $this->request->data['Country'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			// $slug = Inflector::slug(mb_strtolower($this->request->data['Country']['title']), '-');
			// $data[] = $this->request->data['Country'];
			// $data[] = array('alias'=>$slug);
			// $data = array_merge($data[0],$data[1]);

			//Проверка на уникальность alias	
			// $check_alias = $this->Country->findByAlias($data['alias']);
			// if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			
			// $this->Country->locale = 'ru';
			if($this->Country->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// $new_page = $this->Country->findByAlias($data['alias']);
				// if($this->Country->locale == 'kz'){
				// 	$fields = array('title', 'body', 'keywords', 'description');
				// 	$this->change_to_lat('Country', 'news', $fields, $data);
				// }
				
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление страны';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Country->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Country->locale = 'en';
		}else{
			$this->Country->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Country->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->Country->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Country->id = $id;
			$data1 = $this->request->data['Country'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->Country->save($data1)){
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
			// $this->Country->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Country->read(null, $id);
		}
		
		$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		$this->Country->locale = Configure::read('Config.language');

		if (!$this->Country->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Country->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		$this->Country->locale = Configure::read('Config.language');
		
		$data = $this->Country->findByAlias($alias);

		$id = $data['Country']['id'];
		$projects = $this->Project->find('all', array(
			'conditions' => array('Project.category_project_id' => $id)
		));
		// debug($projects);
		// $others = $this->Country->find('all', array(
		// 	'conditions' => array('Country.id !=' => $id),
		// 	'order' => array('Country.priority' => 'DESC'),
		// 	'limit' => 3
		// ));
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = $data['Country']['title'];
		$bc = array(array('link' => '/category-projects', 'title' => 'Пректы'), array('link' => '', 'title' => $title_for_layout));
		// $meta['keywords'] = $data['Country']['keywords'];
		// $meta['description'] = $data['Country']['description'];
		$this->set(compact('data','title_for_layout' ,'meta', 'projects', 'bc', 'alias'));
	}
	
}