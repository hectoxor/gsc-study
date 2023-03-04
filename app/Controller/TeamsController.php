<?php

class TeamsController extends AppController{

	public $uses = array('Team');
	public $components = array('Paginator');

	public function admin_index(){
		$this->Team->locale = array('en', 'kz', 'ru');

		$this->Paginator->settings = array(
			'recursive' => '-1',
			'limit' => 20,
			'order' => 'id DESC',
		);

		$data = $this->Paginator->paginate('Team');

		$this->set( compact('data', 'paginator') );
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Team->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Team->locale = 'en';
		}else{
			$this->Team->locale = 'ru';
		}
		
		if( $this->request->is('post') ){
			$this->Team->create();
			$data = $this->request->data['Team'];

			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if( $this->Team->save($data) ){
				$this->Session->setFlash('Сотрудник добавлен', 'default', array(), 'good');
				return $this->redirect( $this->referer() );
			} else{
				$this->Session->setFlash('Ошибка добавления', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($advan_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Team->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Team->locale = 'en';
		}else{
			$this->Team->locale = 'ru';
		}

		if( is_null($advan_id) || !(int)$advan_id || !$this->Team->exists($advan_id) ){
			throw new NotFoundException('Такой страницы нету...');
		}

		$data = $this->Team->findById($advan_id);

		if($this->request->is(array('post', 'put'))){
			$this->Team->id = $advan_id;
			$data1 = $this->request->data['Team'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			if($this->Team->save($data1)){
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

	public function admin_delete($advan_id){
		$this->Team->locale = Configure::read('Config.language');
		
		if( $this->request->is('get') ){
			throw new MethodNotAllowedException();
		}
		if( is_null($advan_id) || !(int)$advan_id ){
			throw new NotFoundException('Такой страницы нету');
		}

		if( $this->Team->delete($advan_id) ){
			$this->Session->setFlash('Сотрудник удален', 'default', array(), 'good');
			return $this->redirect( $this->referer() );
		} else{
			$this->Session->setFlash( 'Ошибка удаления', 'default', array(), 'bad');
		}
	}

}