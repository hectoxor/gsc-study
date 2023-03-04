<?php

class ImagesController extends AppController{

	public function index(){
		$this->Image->locale = Configure::read('Config.language');
		$this->Image->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Image->find('all');
		// debug($data);
		// die;
		$title_for_layout = __("-");
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$data = $this->Image->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Image->create();
			$data = $this->request->data['Image'];
			// debug($this->request->data);
			// debug($data);
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if($this->Image->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$this->Image->Development->locale = 'ru';
		$developments = $this->Image->Development->find('list');
		// debug($pictures);die;
		$this->set(compact('developments'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Image->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Image->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Image->id = $id;
			// $this->Image->locale = Configure::read('Config.languages');
			// debug($this->Image->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Image'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			
			
			// $this->Image->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
		// 	debug($data1);
		// die;
			
			if($this->Image->save($data1)){
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
			$data = $this->request->data = $this->Image->read(null, $id);
		}
			$this->Image->Development->locale = 'ru';
			$products = $this->Image->Development->find('list');
			$this->set(compact('id', 'data', 'products'));

	}

	public function admin_delete($id){
		if (!$this->Image->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Image->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Image->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$this->Image->locale = Configure::read('Config.language');
		$this->Image->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Image->findById($id);
	
		$title_for_layout = $data['Image']['title'];
		// $meta['keywords'] = $post['Image']['keywords'];
		// $meta['description'] = $post['Image']['description'];
		$this->set(compact('data', '','title_for_layout' ,'meta'));
	}
}