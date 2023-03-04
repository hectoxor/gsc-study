<?php

class PicturesController extends AppController{

	public function index(){
		$this->Picture->locale = Configure::read('Config.language');
		$this->Picture->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Picture->find('all');
		// debug($data);
		// die;
		$title_for_layout = __("-");
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$data = $this->Picture->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Picture->create();
			$data = $this->request->data['Picture'];
			// debug($this->request->data);
			// debug($data);
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if($this->Picture->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Picture->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Picture->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Picture->id = $id;
			// $this->Picture->locale = Configure::read('Config.languages');
			// debug($this->Picture->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Picture'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			
			
			// $this->Picture->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
		// 	debug($data1);
		// die;
			
			if($this->Picture->save($data1)){
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
			$data = $this->request->data = $this->Picture->read(null, $id);
		}
			
			$this->set(compact('id', 'data', 'products'));

	}

	public function admin_delete($id){
		if (!$this->Picture->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Picture->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Picture->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		// $this->Picture->locale = Configure::read('Config.language');
		// $this->Picture->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Picture->findById($id);
	
		$title_for_layout = $data['Picture']['title'];
		// $meta['keywords'] = $post['Picture']['keywords'];
		// $meta['description'] = $post['Picture']['description'];
		$this->set(compact('data', '','title_for_layout' ,'meta'));
	}
}