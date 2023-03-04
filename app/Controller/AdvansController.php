<?php 

class AdvansController extends AppController{

	public $uses = array('Advan');
	public $components = array('Paginator');

	public function admin_index(){
		$this->Advan->locale = array('en', 'kz', 'ru');

		$this->Paginator->settings = array(
			'conditions' => array(
				'Advan.page' => 'home',
			),
			'recursive' => '-1',
			'limit' => 20,
			'order' => 'Advan.item_order DESC',
		);

		$advans = $this->Paginator->paginate('Advan');

		$this->set( compact('advans', 'paginator') );
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Advan->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Advan->locale = 'en';
		}else{
			$this->Advan->locale = 'ru';
		}
		
		if( $this->request->is('post') ){
			$this->Advan->create();
			$data = $this->request->data['Advan'];
			
			if( $this->Advan->save($data) ){
				$this->Session->setFlash('Преимущество добавлено', 'default', array(), 'good');
				return $this->redirect( $this->referer() );
			} else{
				$this->Session->setFlash('Ошибка добавления', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($advan_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Advan->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Advan->locale = 'en';
		}else{
			$this->Advan->locale = 'ru';
		}

		if( is_null($advan_id) || !(int)$advan_id || !$this->Advan->exists($advan_id) ){
			throw new NotFoundException('Такой страницы нету...');
		}

		$data = $this->Advan->findById($advan_id);

		if($this->request->is(array('post', 'put'))){
			$this->Advan->id = $advan_id;
			$data1 = $this->request->data['Advan'];


			if($this->Advan->save($data1)){
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
		$this->Advan->locale = Configure::read('Config.language');
		
		if( $this->request->is('get') ){
			throw new MethodNotAllowedException();
		}
		if( is_null($advan_id) || !(int)$advan_id ){
			throw new NotFoundException('Такой страницы нету');
		}

		if( $this->Advan->delete($advan_id) ){
			$this->Session->setFlash('Преимущество удалено', 'default', array(), 'good');
			return $this->redirect( $this->referer() );
		} else{
			$this->Session->setFlash( 'Ошибка удаления', 'default', array(), 'bad');
		}
	}
}


 ?>