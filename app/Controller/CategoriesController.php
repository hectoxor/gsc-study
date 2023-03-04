<?php

class CategoriesController extends AppController{
	//public $uses = array('Category', 'Product');
	//public $components = array('Paginator');

	public function admin_index(){
		$data = $this->Category->find('threaded', array(
				'recursive' => -1
			));
		$this->set(compact('data'));
	}

	public function index($id = null){
		if($id){
			$data = $this->Category->Product->find('all', array(
				'conditions' => array('Product.category_id' => $id)
			));
		}else{
			$data = $this->Category->Product->find('all');
		}
		
		$cats = $this->Category->find('list');
		// debug($data);
		// $parent_category_bc = array();
		
		// if($data['Category']['parent_id'] > 0){
		// 	$parent_category = $this->Category->findById($data['Category']['parent_id']);
		// 	$parent_category_bc = array('link' => '/category/'.$parent_category['Category']['id'], 'title' => $parent_category['Category']['title']);
		// }

		// $bc = array(
		// 	array('link' => '/', 'title' => 'Продукция'), 
		// 	$parent_category_bc, 
		// 	array('link' => '', 'title' => $data['Category']['title'])
		// );
		
		return $this->set(compact('data', 'bc', 'cats'));
	}

	public function view($alias){
		$data = $this->Category->findByAlias($alias);
		if (!$data) {
			throw new NotFounddException('Такой категории не существует');
		}
		$child_cats = $this->Category->find('all', array(
			'conditions' => array('Category.parent_id' => $data['Category']['id'])
		));
		$title_for_layout = $data['Category']['title'];
		// debug($data);
		// debug($child_cats);
		// die;
		$bc = array(array('link' => '', 'title' => $data['Category']['title']));
		return $this->set(compact('data', 'child_cats', 'title_for_layout', 'bc'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			
			$this->Category->create();
			$data = $this->request->data['Category'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			// debug($data);die;
			$slug = Inflector::slug(mb_strtolower($this->request->data['Category']['title']), '-');
			$data[] = $this->request->data['Category'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);

			//Проверка на уникальность alias	
			$check_alias = $this->Category->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
			if($this->Category->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$cat_t = $this->Category->find('threaded', array(
				'recursive' => -1
			));
		return $this->set(compact('cat_t'));

	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Category->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Category->findById($id);
		if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
		if($this->request->is(array('post', 'put'))){
			$this->Category->id = $id;
			$data1 = $this->request->data['Category'];
			
			
			if($this->Category->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$cat_t = $this->Category->find('threaded', array(
				'recursive' => -1
			));
			$this->set(compact('id', 'data', 'cat_t'));
		}
	}

	public function admin_delete($id){
		if (!$this->Category->exists($id)) {
			throw new NotFounddException('Такой категории нету');
		}
		if($this->Category->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}