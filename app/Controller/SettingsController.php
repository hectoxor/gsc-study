<?php

class SettingsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Setting->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Setting->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Setting->id = $id;
			$data1 = $this->request->data['Setting'];
			// if(!isset($data1['img']['name']) || !$data1['img']['name']){
			// 	unset($data1['img']);
			// }
			if($this->Setting->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function contacts(){
		$title_for_layout = 'Контакты';
		$meta['keywords'] = 'Контакты';
		$meta['description'] = 'Контакты';
		$this->set(compact('meta', 'title_for_layout'));
	}

}