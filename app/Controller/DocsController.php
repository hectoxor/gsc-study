<?php

class DocsController extends AppController{

	public function index(){
		// $this->Doc->locale = Configure::read('Config.language');
		// $this->Doc->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Doc->find('all', array('order'=>array('id DESC')));
		// debug($data);
		// die;
		$title_for_layout = __("Документы");
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		// $this->Doc->locale = Configure::read('Config.language');
		// $this->Doc->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Doc->find('all', array('order'=>array('id DESC')));
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			// 	$this->Doc->locale = 'kz';
			// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			// 	$this->Doc->locale = 'en';
			// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kk'){
			// 	$this->Doc->locale = 'kk';
			// }else{
			// 	$this->Doc->locale = 'ru';
			// }
			$this->Doc->create();
			$data = $this->request->data['Doc'];
			// debug($this->request->data);
			// debug($data);
			// if(!isset($data['doc_en']['name']) || !$data['doc_en']['name']){
			// 	unset($data['doc_en']);
			// }
			// if(!isset($data['doc_ru']['name']) || !$data['doc_ru']['name']){
			// 	unset($data['doc_ru']);
			// }
			// if(!isset($data['doc_kz']['name']) || !$data['doc_kz']['name']){
			// 	unset($data['doc_kz']);
			// }
			if($this->Doc->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				if($this->Doc->locale == 'kz'){
					$fields = array('title', 'body');
					$this->change_to_lat('Doc', 'docs', $fields, $data);
				}
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		// debug($pictures);die;
		$this->set(compact('list', 'id'));
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Doc->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 	$this->Doc->locale = 'kz';
		// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 	$this->Doc->locale = 'en';
		// }elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kk'){
		// 	$this->Doc->locale = 'kk';
		// }else{
		// 	$this->Doc->locale = 'ru';
		// }
		$data = $this->Doc->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Doc->id = $id;
			// $this->Doc->locale = Configure::read('Config.languages');
			// debug($this->Doc->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Doc'];
			if(!isset($data1['doc']['name']) || !$data1['doc']['name']){
				unset($data1['doc']);
			}
			// if(!isset($data1['doc_ru']['name']) || !$data1['doc_ru']['name']){
			// 	unset($data1['doc_ru']);
			// }
			// if(!isset($data1['doc_kz']['name']) || !$data1['doc_kz']['name']){
			// 	unset($data1['doc_kz']);
			// }
			
			$data1['id'] = $id;
			// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			// 	$fields = array('title', 'body');
			// 	$this->change_to_lat('Doc', 'docs', $fields, $data1);
			// }
			
			if($this->Doc->save($data1)){
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
			// $this->Doc->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Doc->read(null, $id);
		}

		$this->set(compact('id', 'data'));

	}

	public function admin_delete($id){
		if (!$this->Doc->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Doc->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}