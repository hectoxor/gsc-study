<?php

class LanguageProgramsController extends AppController{

	public $uses = array('LanguageProgram', 'Country', 'Advan', 'LanguageCard', 'ProgramCompany', 'Review');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->LanguageProgram->locale = Configure::read('Config.language');

		// debug($this->Session->read('city'));die;
		// $city = $this->
		$title_for_layout = 'Языковые программы';
		$h1 = 'Языковые курсы';
		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}
		if($this->Session->read('city') == 'nur-sultan'){
			$title_for_layout = 'Языковые курсы в Астане';
			$h1 = 'Языковые курсы в Астане';
			$meta['description'] = 'Языковые курсы в Астане. Школа английского языка GSCenter предлагает вам широкий спектр курсов общеразговорного английского языка';
		}
		if($this->Session->read('city') == 'almaty'){
			$title_for_layout = 'Языковые курсы в Алматы';
			$h1 = 'Языковые курсы в Алматы';
			$meta['description'] = 'Языковые курсы в Алматы. Школа английского языка GSCenter предлагает вам широкий спектр курсов общеразговорного английского языка';
		}

		// debug($alias);
		$data = $this->LanguageProgram->find('all', array(
			// 'order' => array('LanguageProgram.date DESC, LanguageProgram.position DESC'),
			'conditions' => array('City.alias' => $alias),
			'order' => array('LanguageProgram.priority' => 'DESC'),
			// 'limit' => 15,
			// 'recursive' => -1
		));
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}
		$countries = $this->Country->find('all', array(
			'conditions' => array('Country.active' => 1, 'Country.vuz' => 1),
			'order' => array('Country.priority' => 'DESC')
		));
		
		// $universities = $this->University->find('all', array(
		// 	'conditions' => array('University.active' => 1),
		// 	'order' => array('University.priority' => 'DESC'),
		// 	'limit' => 4,
		// 	'recursive' => -1
		// ));
		// debug($data);die;
		// $title_for_layout = ($data['LanguageProgram']['meta_title']) ? $data['LanguageProgram']['meta_title'] : $data['LanguageProgram']['title'];
		if($this->Session->check('city')){
			$alias = $this->Session->read('city');
		}else{
			$alias = 'nur-sultan';
		}
		if(isset($_GET['city']) && !empty($_GET['city'])){
			$alias = $_GET['city'];
		}
		$language_program_array = $this->Comp->findByAlias($alias . '_language_program');
		$language_program = $language_program_array['Comp']['body'];

		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$page = $title_for_layout;
		$this->set(compact('data', 'title_for_layout', 'bc', 'page', 'countries', 'h1', 'meta', 'language_program'));
	}

	public function admin_index(){
		$this->LanguageProgram->locale = array('en', 'kz', 'ru');

		// $this->LanguageProgram->locale = array('ru', 'kz');
		// $this->LanguageProgram->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->LanguageProgram->find('all', array(
			'order' => array('LanguageProgram.city_id' => 'ASC', "LanguageProgram.id" => 'desc')
		));
		// debug($data);
		// die;
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->LanguageProgram->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->LanguageProgram->locale = 'en';
		}else{
			$this->LanguageProgram->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->LanguageProgram->create();
			$data = $this->request->data['LanguageProgram'];
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			if(!isset($data['alias']) || empty($data['alias'])){
				$slug = Inflector::slug(mb_strtolower($this->request->data['LanguageProgram']['title']), '-');
				$data[] = $this->request->data['LanguageProgram'];
				$data[] = array('alias'=>$slug);
				$data = array_merge($data[0],$data[1]);

				//Проверка на уникальность alias	
				$check_alias = $this->LanguageProgram->findByAlias($data['alias']);
				if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
			}else{
				$data['alias'] = str_replace(array('(', ')', ' ', ',', '.', '?', '!', '+'), '-', $data['alias']); //замена определенных символов
			}
			// debug($data);die;
			
			if($this->LanguageProgram->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
		$cities = $this->LanguageProgram->City->find('list');
		$title_for_layout = 'Добавление страницы школы';
		$this->set(compact('title_for_layout', 'cities'));
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->LanguageProgram->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->LanguageProgram->locale = 'en';
		}else{
			$this->LanguageProgram->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->LanguageProgram->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$this->Advan->locale = array('en', 'kz', 'ru');
		$this->LanguageCard->locale = array('en', 'kz', 'ru');
		$this->Review->locale = array('en', 'kz', 'ru');

		$data = $this->LanguageProgram->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->LanguageProgram->id = $id;
			$data1 = $this->request->data['LanguageProgram'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			
			$data1['id'] = $id;
			
			if($this->LanguageProgram->save($data1)){
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
			// $this->LanguageProgram->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->LanguageProgram->read(null, $id);
		}

		$cities = $this->LanguageProgram->City->find('list');

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.language_program_id' => $id,
			),
			'order' => 'Advan.item_order DESC'
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.language_program_id' => $id,
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$companies = $this->ProgramCompany->find('all', array(
			'order' => 'ProgramCompany.item_order DESC',
		));

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.language_program_id' => $id,
			),
			'order' => 'Review.id DESC',
		));

		$this->set(compact('id', 'data', 'cities', 'advans', 'cards', 'companies', 'reviews'));

	}

	public function admin_delete($id){
		$this->LanguageProgram->locale = Configure::read('Config.language');

		if (!$this->LanguageProgram->exists($id)) {
			throw new NotFoundException('Такой фотографии нету');
		}
		if($this->LanguageProgram->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		$this->LanguageProgram->locale = Configure::read('Config.language');
		$this->Review->locale = Configure::read('Config.language');
		$this->Advan->locale = Configure::read('Config.language');
		$this->LanguageCard->locale = Configure::read('Config.language');

		// $this->LanguageProgram->locale = Configure::read('Config.language');
		// $data = $this->LanguageProgram->findByAlias($alias);
		// if(isset($_GET['city']) && $_GET['city'] == 'nur-sultan'){
		// 	$this->Session->write('city',  'nur-sultan');
		// 	$this->redirect($_SERVER['SCRIPT_URI'], 301);
		// }
		$current_city = $this->Session->read('city');
		
		switch ($current_city) {
			case 'nur-sultan': $city_id = 1; break;
			case 'almaty': $city_id = 2; break;
			case 'aktau': $city_id = 3; break;
			case 'karaganda': $city_id = 4; break;
			case 'pavlodar': $city_id = 5; break;
			default: $city_id = 1; break;
		}
		// var_dump($current_city);
		$data = $this->LanguageProgram->find('first', array(
			'conditions' => array('LanguageProgram.alias' => $alias, 'LanguageProgram.city_id' => $city_id),
			// 'limit' = 1
		));
		if (!$data) {
			throw new NotFoundException('Такой фотографии нету');
		}

		$reviews = $this->Review->find('all', array(
			'conditions' => array(
				'Review.language_program_id' => $data['LanguageProgram']['id'],
			),
			'order' => 'Review.id DESC',
		));

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.language_program_id' => $data['LanguageProgram']['id'],
			),
			'order' => 'Advan.item_order DESC',
		));

		$cards = $this->LanguageCard->find('all', array(
			'conditions' => array(
				'LanguageCard.language_program_id' => $data['LanguageProgram']['id'],
			),
			'order' => 'LanguageCard.item_order DESC',
		));

		$companies = $this->ProgramCompany->find('all', array(
			'order' => 'ProgramCompany.item_order DESC',
		));

		$title_for_layout = ($data['LanguageProgram']['meta_title']) ? $data['LanguageProgram']['meta_title'] : $data['LanguageProgram']['title'];
		$meta['keywords'] = $data['LanguageProgram']['keywords'];
		$meta['description'] = $data['LanguageProgram']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta', 'reviews', 'advans', 'cards', 'companies'));
	}

}