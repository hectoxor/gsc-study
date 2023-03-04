<?php

class AbroadProgramsController extends AppController{

	// Magistracies

	public $uses = array('AbroadProgram', 'Country', 'University', 'EduLanguage');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->AbroadProgram->locale = Configure::read('Config.language');
		$this->EduLanguage->locale = Configure::read('Config.language');
		$this->Country->locale = Configure::read('Config.language');
		$this->University->locale = Configure::read('Config.language');
		
		
		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}

		$data = $this->AbroadProgram->find('first', array(
			'conditions' => array('City.alias' => $alias),
		));

		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}

		$countries = $this->Country->find('list', array(
			'conditions' => array('Country.active' => 1, 'Country.magistratura' => 1),
			'order' => array('Country.priority' => 'DESC')
		));
		$edu_langs = $this->EduLanguage->find('list', array(
			'order' => array('EduLanguage.priority' => 'DESC'),
		));

		$conditions = [];
		if( isset($_GET['country_id']) && $_GET['country_id'] ){
			$conditions[] = ['University.country_id' => $_GET['country_id']];
		}
		if( isset($_GET['edu_lang']) && $_GET['edu_lang'] ){
			// $conditions[] = ['University.edu_language_ids' => $_GET['edu_lang']];
			$conditions[] = [
				'OR' => [
					['University.edu_language_ids' => $_GET['edu_lang']],
					['University.edu_language_ids LIKE' => $_GET['edu_lang'].',%'],
					['University.edu_language_ids LIKE' => '%,'.$_GET['edu_lang'].',%'],
					['University.edu_language_ids LIKE' => '%,'.$_GET['edu_lang']],
				],
			];
		}

		$universities = $this->University->find('all', array(
			'conditions' => array('University.active' => 1, 'University.type' => 'kurs', $conditions),
			'order' => array('University.priority' => 'DESC'),
			'recursive' => -1
		));

		$title_for_layout = ($data['AbroadProgram']['meta_title']) ? $data['AbroadProgram']['meta_title'] : $data['AbroadProgram']['title'];
		$bc = array(array('link' => '', 'title' => $data['AbroadProgram']['title']));
		$page = $title_for_layout;
		$meta['keywords'] = $data['AbroadProgram']['keywords'];
		$meta['description'] = $data['AbroadProgram']['description'];
		$this->set(compact('data', 'title_for_layout', 'bc', 'page', 'countries', 'universities', 'meta', 'edu_langs'));
	}

	public function admin_index(){
		$this->AbroadProgram->locale = array('en', 'kz', 'ru');

		// $this->AbroadProgram->locale = array('ru', 'kz');
		// $this->AbroadProgram->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->AbroadProgram->find('all', array(
			'order' => array("AbroadProgram.id" => 'desc')
		));

		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->AbroadProgram->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->AbroadProgram->locale = 'en';
		}else{
			$this->AbroadProgram->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->AbroadProgram->create();
			$data = $this->request->data['AbroadProgram'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->AbroadProgram->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$cities = $this->AbroadProgram->City->find('list');
		$title_for_layout = 'Добавление страницы вуза';
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->AbroadProgram->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->AbroadProgram->locale = 'en';
		}else{
			$this->AbroadProgram->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->AbroadProgram->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->AbroadProgram->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->AbroadProgram->id = $id;
			$data1 = $this->request->data['AbroadProgram'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->AbroadProgram->save($data1)){
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
			// $this->AbroadProgram->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->AbroadProgram->read(null, $id);
		}
			$cities = $this->AbroadProgram->City->find('list');
			$this->set(compact('id', 'data', 'cities'));

	}

	public function admin_delete($id){
		$this->AbroadProgram->locale = Configure::read('Config.language');

		if (!$this->AbroadProgram->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->AbroadProgram->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$this->AbroadProgram->locale = Configure::read('Config.language');
		$data = $this->AbroadProgram->findById($id);
		$comments_tree = $this->AbroadProgram->Comment->find('threaded', array(
			// 'fields' => array('title', 'parent_id')
			// 'conditions' => array('Page.hide_on_map !=' => 1),
			'order' => array('Comment.id' => 'ASC'),
			// 'fields' => array('id','title','alias','parent_id','hide_on_map'),
			'conditions' => array('Comment.active' => 1, 'Comment.material_id' => $id, 'Comment.type' => 'AbroadProgram'),
			// 'reqursive' => -1
		));
		$comments_count = $this->AbroadProgram->Comment->find('count', array(
			'conditions' => array('Comment.material_id' => $id, 'Comment.type' => 'AbroadProgram', 'Comment.active' => 1)
		));
		$comments = $this->_commentsHtml($comments_tree);
		
		$this->AbroadProgram->query("UPDATE `Magistracys` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");

		// $data = $this->AbroadProgram->find('all', array(
		// 	// 'fields' => array('id', 'img'),
		// 	'order' => array("AbroadProgram.id" => 'desc'),
		// 	'conditions' => array(
		// 		array("AbroadProgram.parent_id" => $id)
		// 	)
		// ));
		// debug($data);


		$title_for_layout = $data['AbroadProgram']['title'];
		$meta['keywords'] = $data['AbroadProgram']['keywords'];
		$meta['description'] = $data['AbroadProgram']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta', 'comments', 'comments_count'));
	}

	protected function _commentsHtml($comments_tree = false){
		if(!$comments_tree) return false;
		$html = '';
		foreach ($comments_tree as $item) {
			$html .= $this->_commentsTemplate($item);
		}
		return $html;
	}

	protected function _commentsTemplate($comments){
		ob_start();
		include APP . "View/Elements/comments_tpl.ctp";
		return ob_get_clean();
	}



}