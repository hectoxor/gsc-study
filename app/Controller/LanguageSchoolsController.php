<?php

class LanguageSchoolsController extends AppController{

	public $uses = array('LanguageSchool', 'Country', 'Review', 'Advan', 'Team');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->LanguageSchool->locale = Configure::read('Config.language');
		$this->Advan->locale = Configure::read('Config.language');
		$this->Team->locale = Configure::read('Config.language');

		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}

		// $reviews = $this->Review->find('all', array(
		// 	'conditions' => array('City.alias' => $alias),
		// 	'order' => array('Review.priority' => 'DESC')
		// ));
		$data = $this->LanguageSchool->find('first', array(
			// 'order' => array('LanguageSchool.date DESC, LanguageSchool.position DESC'),
			'conditions' => array('City.alias' => $alias),
			// 'order' => array('LanguageSchool.priority DESC'),
			// 'limit' => 15,
			// 'recursive' => -1
		));
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}
		// $countries = $this->Country->find('all', array(
		// 	'conditions' => array('Country.active' => 1, 'Country.vuz' => 1),
		// 	'order' => array('Country.priority' => 'DESC')
		// ));
		// $universities = $this->University->find('all', array(
		// 	'conditions' => array('University.active' => 1),
		// 	'order' => array('University.priority' => 'DESC'),
		// 	'limit' => 4,
		// 	'recursive' => -1
		// ));
		// debug($universities);die;

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.language_school_id' => $data['LanguageSchool']['id'],
			),
			'order' => 'Advan.item_order DESC'
		));

		$teams = $this->Team->find('all', array(
			'conditions' => array(
				'Team.language_school_id' => $data['LanguageSchool']['id'],
			),
			'order' => 'Team.item_order DESC',
		));

		$title_for_layout = ($data['LanguageSchool']['meta_title']) ? $data['LanguageSchool']['meta_title'] : $data['LanguageSchool']['title'];

		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$page = $title_for_layout;
		$meta['keywords'] = $data['LanguageSchool']['keywords'];
		$meta['description'] = $data['LanguageSchool']['description'];

		$this->set(compact('data', 'title_for_layout', 'bc', 'page', 'meta', 'advans', 'teams'));
	}

	public function admin_index(){
		$this->LanguageSchool->locale = array('en', 'kz', 'ru');

		// $this->LanguageSchool->locale = array('ru', 'kz');
		// $this->LanguageSchool->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->LanguageSchool->find('all', array(
			'order' => array('LanguageSchool.city_id' => 'ASC', "LanguageSchool.id" => 'desc')
		));
		// debug($data);
		// die;
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->LanguageSchool->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->LanguageSchool->locale = 'en';
		}else{
			$this->LanguageSchool->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->LanguageSchool->create();
			$data = $this->request->data['LanguageSchool'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->LanguageSchool->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$cities = $this->LanguageSchool->City->find('list');
		$title_for_layout = 'Добавление страницы школы';
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->LanguageSchool->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->LanguageSchool->locale = 'en';
		}else{
			$this->LanguageSchool->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->LanguageSchool->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$this->Advan->locale = array('en', 'kz', 'ru');
		$this->Team->locale = array('en', 'kz', 'ru');

		$data = $this->LanguageSchool->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->LanguageSchool->id = $id;
			$data1 = $this->request->data['LanguageSchool'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->LanguageSchool->save($data1)){
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
			// $this->LanguageSchool->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->LanguageSchool->read(null, $id);
		}

		$cities = $this->LanguageSchool->City->find('list');
		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.language_school_id' => $id,
			),
			'order' => 'Advan.item_order DESC'
		));

		$teams = $this->Team->find('all', array(
			'conditions' => array(
				'Team.language_school_id' => $id,
			),
			'order' => 'Team.item_order DESC',
		));

		$this->set(compact('id', 'data', 'cities', 'advans', 'teams'));

	}

	public function admin_delete($id){
		$this->LanguageSchool->locale = Configure::read('Config.language');

		if (!$this->LanguageSchool->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->LanguageSchool->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$this->LanguageSchool->locale = Configure::read('Config.language');
		$data = $this->LanguageSchool->findById($id);
		$comments_tree = $this->LanguageSchool->Comment->find('threaded', array(
			// 'fields' => array('title', 'parent_id')
			// 'conditions' => array('Page.hide_on_map !=' => 1),
			'order' => array('Comment.id' => 'ASC'),
			// 'fields' => array('id','title','alias','parent_id','hide_on_map'),
			'conditions' => array('Comment.active' => 1, 'Comment.material_id' => $id, 'Comment.type' => 'LanguageSchool'),
			// 'reqursive' => -1
		));
		$comments_count = $this->LanguageSchool->Comment->find('count', array(
			'conditions' => array('Comment.material_id' => $id, 'Comment.type' => 'LanguageSchool', 'Comment.active' => 1)
		));
		$comments = $this->_commentsHtml($comments_tree);
		
		$this->LanguageSchool->query("UPDATE `LanguageSchools` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");

		// $data = $this->LanguageSchool->find('all', array(
		// 	// 'fields' => array('id', 'img'),
		// 	'order' => array("LanguageSchool.id" => 'desc'),
		// 	'conditions' => array(
		// 		array("LanguageSchool.parent_id" => $id)
		// 	)
		// ));
		// debug($data);


		$title_for_layout = $data['LanguageSchool']['title'];
		$meta['keywords'] = $data['LanguageSchool']['keywords'];
		$meta['description'] = $data['LanguageSchool']['description'];

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