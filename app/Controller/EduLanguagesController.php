<?php 

class EduLanguagesController extends AppController{

	public $uses = array('EduLanguage');
	public $components = array('Paginator');

	public function admin_index(){
		$this->EduLanguage->locale = array('en', 'kz', 'ru');

		$this->Paginator->settings = array(
			'recursive' => '-1',
			'limit' => 20,
			'order' => 'EduLanguage.priority DESC',
		);

		$data = $this->Paginator->paginate('EduLanguage');

		$this->set( compact('data', 'paginator') );
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->EduLanguage->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->EduLanguage->locale = 'en';
		}else{
			$this->EduLanguage->locale = 'ru';
		}
		
		if( $this->request->is('post') ){
			$this->EduLanguage->create();
			$data = $this->request->data['EduLanguage'];
			
			if( $this->EduLanguage->save($data) ){
				$this->Session->setFlash('Элемент добавлен', 'default', array(), 'good');
				return $this->redirect( $this->referer() );
			} else{
				$this->Session->setFlash('Ошибка добавления', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($advan_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->EduLanguage->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->EduLanguage->locale = 'en';
		}else{
			$this->EduLanguage->locale = 'ru';
		}

		if( is_null($advan_id) || !(int)$advan_id || !$this->EduLanguage->exists($advan_id) ){
			throw new NotFoundException('Такой страницы нету...');
		}

		$data = $this->EduLanguage->findById($advan_id);

		if($this->request->is(array('post', 'put'))){
			$this->EduLanguage->id = $advan_id;
			$data1 = $this->request->data['EduLanguage'];


			if($this->EduLanguage->save($data1)){
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
		$this->EduLanguage->locale = Configure::read('Config.language');
		
		if( $this->request->is('get') ){
			throw new MethodNotAllowedException();
		}
		if( is_null($advan_id) || !(int)$advan_id ){
			throw new NotFoundException('Такой страницы нету');
		}

		if( $this->EduLanguage->delete($advan_id) ){
			$this->Session->setFlash('Элемент удален', 'default', array(), 'good');
			return $this->redirect( $this->referer() );
		} else{
			$this->Session->setFlash( 'Ошибка удаления', 'default', array(), 'bad');
		}
	}
}


 ?>