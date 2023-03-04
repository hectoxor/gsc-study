<?php

class LanguageCardsController extends AppController{

	public $uses = array('LanguageCard');
	public $components = array('Paginator');

	public function admin_index(){
		$this->LanguageCard->locale = array('en', 'kz', 'ru');

		$this->Paginator->settings = array(
			'recursive' => '-1',
			'limit' => 20,
			'order' => 'id DESC',
		);

		$data = $this->Paginator->paginate('LanguageCard');

		$this->set( compact('data', 'paginator') );
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->LanguageCard->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->LanguageCard->locale = 'en';
		}else{
			$this->LanguageCard->locale = 'ru';
		}
		
		if( $this->request->is('post') ){
			$this->LanguageCard->create();
			$data = $this->request->data['LanguageCard'];

			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			
			if( $this->LanguageCard->save($data) ){
				$this->Session->setFlash('Материал добавлен', 'default', array(), 'good');
				return $this->redirect( $this->referer() );
			} else{
				$this->Session->setFlash('Ошибка добавления', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($advan_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->LanguageCard->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->LanguageCard->locale = 'en';
		}else{
			$this->LanguageCard->locale = 'ru';
		}

		if( is_null($advan_id) || !(int)$advan_id || !$this->LanguageCard->exists($advan_id) ){
			throw new NotFoundException('Такой страницы нету...');
		}

		$data = $this->LanguageCard->findById($advan_id);

		if($this->request->is(array('post', 'put'))){
			$this->LanguageCard->id = $advan_id;
			$data1 = $this->request->data['LanguageCard'];

			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			if($this->LanguageCard->save($data1)){
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
		$this->LanguageCard->locale = Configure::read('Config.language');
		
		if( $this->request->is('get') ){
			throw new MethodNotAllowedException();
		}
		if( is_null($advan_id) || !(int)$advan_id ){
			throw new NotFoundException('Такой страницы нету');
		}

		if( $this->LanguageCard->delete($advan_id) ){
			$this->Session->setFlash('Материал удален', 'default', array(), 'good');
			return $this->redirect( $this->referer() );
		} else{
			$this->Session->setFlash( 'Ошибка удаления', 'default', array(), 'bad');
		}
	}

}