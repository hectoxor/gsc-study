<?php

class VideosController extends AppController{

	public $uses = array('Video', 'Album');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$videos = $this->Video->find('all', array(
			// 'order' => array('Video.date DESC, Video.position DESC'),
			//'conditions' => array($filter, array('Video.anons' => 0)),
			'order' => array('Video.priority DESC'),
			// 'limit' => 15,
			// 'recursive' => -1
		));

		$photos = $this->Album->find('all', array(
			// 'order' => array('Video.date DESC, Video.position DESC'),
			//'conditions' => array($filter, array('Video.anons' => 0)),
			'order' => array('Album.id DESC'),
			// 'limit' => 15,
			// 'recursive' => -1
		));
		// debug($photos);
		$title_for_layout = __('Галерея');

		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$page = $title_for_layout;
		$this->set(compact('videos', 'title_for_layout', 'bc', 'page', 'photos'));
	}

	public function admin_index(){
			// $this->Video->locale = array('ru', 'kz');
			// $this->Video->bindTranslation(array('title' => 'titleTranslation'));
			$data = $this->Video->find('all', array(
				'order' => array("Video.id" => 'desc')
			));
			// debug($data);
			// die;
			$this->set(compact('data'));
		}

	public function admin_add(){

		if($this->request->is('post')){
			$this->Video->create();
			$data = $this->request->data['Video'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->Video->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		

		$title_for_layout = 'Добавление видео';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Video->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->Video->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Video->id = $id;
			$data1 = $this->request->data['Video'];
			
			
			$data1['id'] = $id;
			
			if($this->Video->save($data1)){
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
			// $this->Video->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Video->read(null, $id);
		}
			$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		if (!$this->Video->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->Video->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$this->Video->locale = Configure::read('Config.language');
		$data = $this->Video->findById($id);
		$comments_tree = $this->Video->Comment->find('threaded', array(
			// 'fields' => array('title', 'parent_id')
			// 'conditions' => array('Page.hide_on_map !=' => 1),
			'order' => array('Comment.id' => 'ASC'),
			// 'fields' => array('id','title','alias','parent_id','hide_on_map'),
			'conditions' => array('Comment.active' => 1, 'Comment.material_id' => $id, 'Comment.type' => 'Video'),
			// 'reqursive' => -1
		));
		$comments_count = $this->Video->Comment->find('count', array(
			'conditions' => array('Comment.material_id' => $id, 'Comment.type' => 'Video', 'Comment.active' => 1)
		));
		$comments = $this->_commentsHtml($comments_tree);
		
		$this->Video->query("UPDATE `videos` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");

		// $data = $this->Video->find('all', array(
		// 	// 'fields' => array('id', 'img'),
		// 	'order' => array("Video.id" => 'desc'),
		// 	'conditions' => array(
		// 		array("Video.parent_id" => $id)
		// 	)
		// ));
		// debug($data);


		$title_for_layout = $data['Video']['title'];
		$meta['keywords'] = $data['Video']['keywords'];
		$meta['description'] = $data['Video']['description'];

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