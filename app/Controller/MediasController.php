<?php

class MediasController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}


	public function admin_index(){
			// $this->Media->locale = array('ru', 'kz');
			// $this->Media->bindTranslation(array('title' => 'titleTranslation'));
			$data = $this->Media->find('all', array(
				'order' => array("Media.id" => 'desc')
			));
			// debug($data);
			// die;
			$this->set(compact('data'));
		}

	public function admin_add(){

		if($this->request->is('post')){
			$this->Media->create();
			$data = $this->request->data['Media'];
			
			if($this->Media->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$list = $this->Media->Course->find('list');
		$title_for_layout = 'Добавление видео';
		$this->set(compact('title_for_layout', 'list'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Media->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->Media->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Media->id = $id;
			$data1 = $this->request->data['Media'];
			
			
			$data1['id'] = $id;
			
			if($this->Media->save($data1)){
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
			// $this->Media->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Media->read(null, $id);
		}
		$list = $this->Media->Course->find('list');
		$this->set(compact('id', 'data', 'list'));

	}

	public function admin_delete($id){
		if (!$this->Media->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->Media->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}







}