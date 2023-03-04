<?php

// App::uses('AppController', 'Controller');

class StaticPagesController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index($page_alias = null){
		$this->StaticPage->locale = Configure::read('Config.language');

		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		// debug($page_alias);
		$page = $this->StaticPage->findByAlias($page_alias);
		// debug($page);
		// if(!$page){
		// 	throw new NotFoundException("Такой страницы нету");
		// }
		
		//$blog = $this->Blog->find('all');
		$body = $page['StaticPage']['body'];
		$title_for_layout = $page['StaticPage']['title'];
		$meta['keywords'] = $page['StaticPage']['keywords'];
		$meta['description'] = $page['StaticPage']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta', 'body'));
	}
	public function page($page_alias = null){
		$this->StaticPage->locale = Configure::read('Config.language');

		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$page = $this->StaticPage->findByAlias($page_alias);
		if(!$page){
			throw new NotFoundException("Такой страницы нету");
		}

		$title_for_layout = $page['StaticPage']['title'];
		$meta['keywords'] = $page['StaticPage']['keywords'];
		$meta['description'] = $page['StaticPage']['description'];
		
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta'));
	}

	public function admin_index(){
		$this->StaticPage->locale = array('en', 'kz', 'ru');
		
		$pages = $this->StaticPage->find('all');
		$this->set(compact('pages'));
	}



	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->StaticPage->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->StaticPage->locale = 'en';
		}else{
			$this->StaticPage->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->StaticPage->create();
			$data = $this->request->data['StaticPage'];
			
			if(empty($data['alias'])){
				$slug = Inflector::slug(mb_strtolower($this->request->data['StaticPage']['title']), '-');
				$data[] = $this->request->data['StaticPage'];
				$data[] = array('alias'=>$slug);
				$data = array_merge($data[0],$data[1]);

				//Проверка на уникальность alias	
				$check_alias = $this->StaticPage->findByAlias($data['alias']);
				if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
			}
			

			if($this->StaticPage->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($page_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->StaticPage->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->StaticPage->locale = 'en';
		}else{
			$this->StaticPage->locale = 'ru';
		}
		
		$page = $this->StaticPage->findById($page_id);
		if(!$page_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->StaticPage->id = $page_id;
			if($this->StaticPage->save($this->request->data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $page;
			
			$this->set(compact('page_id', 'page'));
		}
	}


	
}
