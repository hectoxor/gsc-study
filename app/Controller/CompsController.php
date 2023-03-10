<?php

class CompsController extends AppController{

	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }
	


	public function admin_index(){
		$this->Comp->locale = array('en', 'kz', 'ru');

		$data = $this->Comp->find('all', array(
			'order' => array("Comp.id" => 'desc')
		));
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Comp->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Comp->locale = 'en';
		}else{
			$this->Comp->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Comp->create();
			$data = $this->request->data['Comp'];
			
			if($this->Comp->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		

		$title_for_layout = 'Добавление элемента';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Comp->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Comp->locale = 'en';
		}else{
			$this->Comp->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Comp->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->Comp->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Comp->id = $id;
			$data1 = $this->request->data['Comp'];
			
			
			$data1['id'] = $id;
			
			if($this->Comp->save($data1)){
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
			// $this->Comp->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Comp->read(null, $id);
		}
			$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		$this->Comp->locale = Configure::read('Config.language');
		
		if (!$this->Comp->exists($id)) {
			throw new NotFounddException('Такого элемента нет');
		}
		if($this->Comp->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}



	



}