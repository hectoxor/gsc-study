<?php

class SecondaryEducationsController extends AppController{

	public $uses = array('SecondaryEducation', 'Country', 'University', 'Review', 'EduLanguage');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->SecondaryEducation->locale = Configure::read('Config.language');
		$this->EduLanguage->locale = Configure::read('Config.language');
		$this->Country->locale = Configure::read('Config.language');
		$this->University->locale = Configure::read('Config.language');

		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}

		$data = $this->SecondaryEducation->find('first', array(
			'conditions' => array('City.alias' => $alias),
		));
		$reviews = $this->Review->find('all', array(
			'conditions' => array('City.alias' => $alias),
			'order' => array('Review.priority' => 'DESC')
		));

		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}
		
		$countries = $this->Country->find('list', array(
			'conditions' => array('Country.active' => 1, 'Country.mba' => 1),
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
			// $conditions[] = ['University.edu_language_id' => $_GET['edu_lang']];
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
			'conditions' => array('University.active' => 1, 'University.type' => 'srednee', $conditions),
			'order' => array('University.priority' => 'DESC'),
			'limit' => 4,
			'recursive' => -1
		));

		$title_for_layout = ($data['SecondaryEducation']['meta_title']) ? $data['SecondaryEducation']['meta_title'] : $data['SecondaryEducation']['title'];
		$bc = array(array('link' => '', 'title' => $data['SecondaryEducation']['title']));
		$page = $title_for_layout;
		$meta['keywords'] = $data['SecondaryEducation']['keywords'];
		$meta['description'] = $data['SecondaryEducation']['description'];
		$this->set(compact('data', 'title_for_layout', 'bc', 'page', 'countries', 'edu_langs', 'universities', 'reviews', 'meta'));
	}

	public function admin_index(){
		$this->SecondaryEducation->locale = array('en', 'kz', 'ru');

		// $this->SecondaryEducation->locale = array('ru', 'kz');
		// $this->SecondaryEducation->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->SecondaryEducation->find('all', array(
			'order' => array("SecondaryEducation.id" => 'desc')
		));

		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->SecondaryEducation->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->SecondaryEducation->locale = 'en';
		}else{
			$this->SecondaryEducation->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->SecondaryEducation->create();
			$data = $this->request->data['SecondaryEducation'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->SecondaryEducation->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$cities = $this->SecondaryEducation->City->find('list');
		$title_for_layout = 'Добавление страницы вуза';
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->SecondaryEducation->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->SecondaryEducation->locale = 'en';
		}else{
			$this->SecondaryEducation->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->SecondaryEducation->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->SecondaryEducation->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->SecondaryEducation->id = $id;
			$data1 = $this->request->data['SecondaryEducation'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->SecondaryEducation->save($data1)){
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
			// $this->SecondaryEducation->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->SecondaryEducation->read(null, $id);
		}
			$cities = $this->SecondaryEducation->City->find('list');
			$this->set(compact('id', 'data', 'cities'));

	}

	public function admin_delete($id){
		$this->SecondaryEducation->locale = Configure::read('Config.language');

		if (!$this->SecondaryEducation->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->SecondaryEducation->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$this->SecondaryEducation->locale = Configure::read('Config.language');
		$data = $this->SecondaryEducation->findById($id);
		$comments_tree = $this->SecondaryEducation->Comment->find('threaded', array(
			// 'fields' => array('title', 'parent_id')
			// 'conditions' => array('Page.hide_on_map !=' => 1),
			'order' => array('Comment.id' => 'ASC'),
			// 'fields' => array('id','title','alias','parent_id','hide_on_map'),
			'conditions' => array('Comment.active' => 1, 'Comment.material_id' => $id, 'Comment.type' => 'Mba'),
			// 'reqursive' => -1
		));
		$comments_count = $this->SecondaryEducation->Comment->find('count', array(
			'conditions' => array('Comment.material_id' => $id, 'Comment.type' => 'SecondaryEducation', 'Comment.active' => 1)
		));
		$comments = $this->_commentsHtml($comments_tree);
		
		$this->SecondaryEducation->query("UPDATE `Mbas` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");

		// $data = $this->SecondaryEducation->find('all', array(
		// 	// 'fields' => array('id', 'img'),
		// 	'order' => array("SecondaryEducation.id" => 'desc'),
		// 	'conditions' => array(
		// 		array("SecondaryEducation.parent_id" => $id)
		// 	)
		// ));
		// debug($data);


		$title_for_layout = $data['SecondaryEducation']['title'];
		$meta['keywords'] = $data['SecondaryEducation']['keywords'];
		$meta['description'] = $data['SecondaryEducation']['description'];

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