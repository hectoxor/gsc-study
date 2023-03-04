<?php

class PartnersController extends AppController{

	public function index(){
		$data = $this->Partner->find('all', array('order'=>array('id DESC')));
		$title_for_layout = 'Партнеры';
		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$this->set(compact('data', 'title_for_layout', 'bc'));
	}

	public function admin_index(){
		$data = $this->Partner->find('all', array('order'=>array('id DESC')));
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			
			$this->Partner->create();
			$data = $this->request->data['Partner'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if($this->Partner->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$list = array('promoter' => 'Промоутер', 'event' => 'Использован на мероприятиях', 'fabricator' => 'Производитель');
		$this->set(compact('list', 'id'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Partner->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		
		$data = $this->Partner->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Partner->id = $id;
			$data1 = $this->request->data['Partner'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->Partner->save($data1)){
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
			$data = $this->request->data = $this->Partner->read(null, $id);
		}
		$list = array('promoter' => 'Промоутер', 'event' => 'Использован на мероприятиях', 'fabricator' => 'Производитель');
		$this->set(compact('id', 'data', 'list'));

	}

	public function admin_delete($id){
		if (!$this->Partner->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Partner->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}