<?php

class HigherEducationsController extends AppController{

	public $uses = array('HigherEducation', 'Country', 'University', 'Review', 'EduLanguage');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->HigherEducation->locale = Configure::read('Config.language');
		$this->EduLanguage->locale = Configure::read('Config.language');
		$this->Country->locale = Configure::read('Config.language');
		$this->University->locale = Configure::read('Config.language');

		// debug($this->Session->read('city'));die;
		// $city = $this->
		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}
		// debug($alias);
		$data = $this->HigherEducation->find('first', array(
			// 'order' => array('HigherEducation.date DESC, HigherEducation.position DESC'),
			'conditions' => array('City.alias' => $alias),
			// 'order' => array('HigherEducation.priority DESC'),
			// 'limit' => 15,
			// 'recursive' => -1
		));
		$reviews = $this->Review->find('all', array(
			'conditions' => array('City.alias' => $alias),
			'order' => array('Review.priority' => 'DESC')
		));
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}
		$countries = $this->Country->find('list', array(
			'conditions' => array('Country.active' => 1, 'Country.vuz' => 1),
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
			'conditions' => array('University.active' => 1, 'University.type' => 'visshee', $conditions),
			'order' => array('University.priority' => 'DESC'),
			'limit' => 4,
			'recursive' => -1
		));
		// debug($universities);die;
		$title_for_layout = ($data['HigherEducation']['meta_title']) ? $data['HigherEducation']['meta_title'] : $data['HigherEducation']['title'];

		//$bc = array(array('link' => '', 'title' => 'Образование за рубежом'), array('link' => '', 'title' => $data['HigherEducation']['title']));
		$bc = array(array('link' => '', 'title' => $data['HigherEducation']['title']));
		$page = $title_for_layout;
		
		$meta['keywords'] = $data['HigherEducation']['keywords'];
		$meta['description'] = $data['HigherEducation']['description'];
		$this->set(compact('data', 'title_for_layout', 'bc', 'page', 'countries', 'edu_langs', 'universities', 'reviews', 'meta'));
	}

	public function admin_index(){
		$this->HigherEducation->locale = array('en', 'kz', 'ru');

		// $this->HigherEducation->locale = array('ru', 'kz');
		// $this->HigherEducation->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->HigherEducation->find('all', array(
			'order' => array("HigherEducation.id" => 'desc')
		));
		// debug($data);
		// die;
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->HigherEducation->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->HigherEducation->locale = 'en';
		}else{
			$this->HigherEducation->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->HigherEducation->create();
			$data = $this->request->data['HigherEducation'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->HigherEducation->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$cities = $this->HigherEducation->City->find('list');
		$title_for_layout = 'Добавление страницы вуза';
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->HigherEducation->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->HigherEducation->locale = 'en';
		}else{
			$this->HigherEducation->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->HigherEducation->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->HigherEducation->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->HigherEducation->id = $id;
			$data1 = $this->request->data['HigherEducation'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->HigherEducation->save($data1)){
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
			// $this->HigherEducation->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->HigherEducation->read(null, $id);
		}
			$cities = $this->HigherEducation->City->find('list');
			$this->set(compact('id', 'data', 'cities'));

	}

	public function admin_delete($id){
		$this->HigherEducation->locale = Configure::read('Config.language');

		if (!$this->HigherEducation->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->HigherEducation->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$this->HigherEducation->locale = Configure::read('Config.language');
		$data = $this->HigherEducation->findById($id);
		$comments_tree = $this->HigherEducation->Comment->find('threaded', array(
			// 'fields' => array('title', 'parent_id')
			// 'conditions' => array('Page.hide_on_map !=' => 1),
			'order' => array('Comment.id' => 'ASC'),
			// 'fields' => array('id','title','alias','parent_id','hide_on_map'),
			'conditions' => array('Comment.active' => 1, 'Comment.material_id' => $id, 'Comment.type' => 'HigherEducation'),
			// 'reqursive' => -1
		));
		$comments_count = $this->HigherEducation->Comment->find('count', array(
			'conditions' => array('Comment.material_id' => $id, 'Comment.type' => 'HigherEducation', 'Comment.active' => 1)
		));
		$comments = $this->_commentsHtml($comments_tree);
		
		$this->HigherEducation->query("UPDATE `Vuzs` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");

		// $data = $this->HigherEducation->find('all', array(
		// 	// 'fields' => array('id', 'img'),
		// 	'order' => array("HigherEducation.id" => 'desc'),
		// 	'conditions' => array(
		// 		array("HigherEducation.parent_id" => $id)
		// 	)
		// ));
		// debug($data);


		$title_for_layout = $data['HigherEducation']['title'];
		$meta['keywords'] = $data['HigherEducation']['keywords'];
		$meta['description'] = $data['HigherEducation']['description'];

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