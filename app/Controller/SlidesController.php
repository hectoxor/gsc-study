<?php

class SlidesController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function admin_index(){
		$this->Slide->locale = array('en', 'kz', 'ru');

		// $this->Slide->locale = 'ru';
		// $this->Slide->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Slide->find('all');
		// debug($data);
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Slide->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Slide->locale = 'en';
		}else{
			$this->Slide->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Slide->create();
			$data = $this->request->data['Slide'];
			
			if(!$data['img']['name']){
				unset($data['img']);
			}
			
			if($this->Slide->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// if($this->Slide->locale == 'kz'){
				// 	$fields = array('title', 'body', 'fio', 'link');
				// 	$this->change_to_lat('Slide', 'slides', $fields, $data);
				// }
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Добавление слайда';
		$cities = $this->Slide->City->find('list');
		array_unshift($cities,  'Глобальный');
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Slide->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Slide->locale = 'en';
		}else{
			$this->Slide->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->Slide->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		
		$data = $this->Slide->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Slide->id = $id;
			$data1 = $this->request->data['Slide'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			
			if($this->Slide->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			// $this->Slide->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Slide->read(null, $id);
		}
		$cities = $this->Slide->City->find('list');
		array_unshift($cities,  'Глобальный');
		$this->set(compact('id', 'data', 'cities'));

	}

	public function admin_delete($id){
		$this->Slide->locale = Configure::read('Config.language');
		
		if (!$this->Slide->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Slide->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}