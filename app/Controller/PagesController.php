<?php
// App::uses('CakeEmail', 'Network/Email');

class PagesController extends AppController {

	public $uses = array('Page', 'Slide', 'Comp', 'News', 'Review', 'City', 'Course', 'Advan', 'University', 'Team');
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index($alias){
		$this->Advan->locale = Configure::read('Config.language');
		$this->Slide->locale = Configure::read('Config.language');
		$this->News->locale = Configure::read('Config.language');
		$this->University->locale = Configure::read('Config.language');
		$this->Comp->locale = Configure::read('Config.language');
		
		if(!isset($alias) && emtpy($alias)){
			if($this->Session->check('city')){
				$alias = $this->Session->read('city');
			}
		}else{
			$this->Session->write('city',  $alias);
		}
		
		// else{
		// 	$alias = 'nur-sultan';
		// }
		if(isset($_GET['city']) && !empty($_GET['city'])){
			$alias = $_GET['city'];
			$this->Session->write('city',  $alias);
		}
		$title_array = $this->Comp->findByAlias($alias . '_meta_title');
		$title_for_layout = $title_array['Comp']['body'];

		$city = $this->City->findByAlias($alias);
		$city_id = $city['City']['id'];
		$news = $this->News->find('all', array(
			'conditions' => array('News.city_id' => array($city_id, 0)),
			'order' => array('News.date' => 'DESC'),
			'limit' => 3
		));
		$comps = $this->Comp->find('all');
		// $price = $this->Doc->findById(1);
		
		$reviews = $this->Review->find('all', array(
			'conditions' => array('City.alias' => $alias),
			'order' => array('Review.priority' => 'DESC')
		));
		$slides = $this->Slide->find('all', array(
			'conditions' => array('Slide.city_id' => array($city_id, 0)),
			'order' => array('Slide.priority' => 'DESC')
		));

		$univers = $this->University->find('all', array(
			'conditions' => array(
				'University.type' => 'visshee',
			),
			'limit' => 8,
			'order' => 'University.id DESC',
		));
		
		

		
		// $last_slide = $slides[0];
		// $bottom_slides = $slides;
		// unset($bottom_slides[0]);
		// $bottom_slides[] = $last_slide;
		
		
		
		$h1_array = $this->Comp->findByAlias($alias . '_h1');
		$h2_array = $this->Comp->findByAlias($alias . '_h2');
		$seotext_array = $this->Comp->findByAlias($alias . '_seotext');
		$links_array = $this->Comp->findByAlias($alias . '_links');
		$description_array = $this->Comp->findByAlias($alias . '_description');
		$keywords_array = $this->Comp->findByAlias($alias . '_keywords');
		// debug($description_array);die;

		$advans = $this->Advan->find('all', array(
			'conditions' => array(
				'Advan.page' => 'home',
			),
			'order' => 'Advan.item_order DESC',
		));
		
		$h1 = $h1_array['Comp']['body'];
		$h2 = $h2_array['Comp']['body'];
		$seotext = $seotext_array['Comp']['body'];
		$dop_links = $links_array['Comp']['body'];
		$meta['keywords'] = $keywords_array['Comp']['body'];
		$meta['description'] = $description_array['Comp']['body'];
		$this->set(compact('title_for_layout', 'meta', 'h1', 'h2', 'seotext', 'dop_links','slides', 'comps', 'news', 'price', 'bottom_slides', 'reviews', 'alias', 'advans', 'univers'));
	}    

	public function test(){
		$title_for_layout = "Онлайн тест";
		$this->set(compact('title_for_layout'));
	}

	// public function pavlodar(){
	// 	$title_for_layout = "Образование за рубежом Павлодар - GSC";
	// 	$meta['keywords'] = 'образовательный центр павлодар, образование за рубежом павлодар';
	// 	$meta['description'] = 'Образование за рубежом Павлодар. Образовательный центр GSC (Global Student center) - лидер в области образования за рубежом.';
	// 	$this->set(compact('title_for_layout', 'meta'));
	// }

	// public function almaty(){
	// 	$title_for_layout = "Образование за рубежом Алматы - обучение для казахстанцев";
	// 	$meta['keywords'] = 'образование за рубежом алматы, образовательный центр алматы';
	// 	$meta['description'] = 'Образование за рубежом Алматы обучение для казахстанцев. Образовательный центр в Алматы GSC (Global Student center) - лидер в области образования за рубежом. Курсы английского языка';
	// 	$this->set(compact('title_for_layout', 'meta'));
	// }

	public function about(){
		$this->Page->locale = Configure::read('Config.language');

		$data = $this->Page->findByAlias('about');
		if(!$data){
			throw new NotFoundException("Такой страницы нету");
		}
		$title_for_layout = $data['Page']['title'];
		$meta['keywords'] = $data['Page']['keywords'];
		$meta['description'] = $data['Page']['description'];
		$teams = $this->Team->find('all');

		

		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$this->set(compact('title_for_layout', 'meta', 'data', 'teams', 'bc'));
	}

	public function contacts(){
		// $data = $this->Page->findByAlias('about');
		// if(!$data){
		// 	throw new NotFoundException("Такой страницы нету");
		// }
		$this->Page->locale = Configure::read('Config.language');

		$title_for_layout = 'Контакты';
		$meta['keywords'] = '';
		$meta['description'] = '';
		$bc = array(array('link' => '', 'title' => $title_for_layout));
		$this->set(compact('title_for_layout', 'meta', 'bc'));
	}

	public function page($page_alias = null){
		$this->Page->locale = Configure::read('Config.language');
		$this->Team->locale = Configure::read('Config.language');
		
		// $this->News->locale = Configure::read('Config.language');
		// $this->Page->locale = Configure::read('Config.language');
		// $this->Page->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		// if(isset($_GET['nur'])){

		// debug($this->params);die;
		// }
		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$page = $this->Page->findByAlias($page_alias);
		
		if(!$page){
			throw new NotFoundException("Такой страницы нету");
		}
		// $news = $this->News->find('all', array(
		// 	'order' => array('News.date' => 'DESC'),
		// 	'limit' => 5
		// ));
		$courses = $this->Course->find('all', array(
			// 'conditions' => ,
			// 'order' => array('Course.priority' => 'DESC')
		));
		$title_for_layout = ($page['Page']['meta_title']) ? $page['Page']['meta_title'] : $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];

		// if(isset($_GET['nur'])){
		
		if($this->Session->check('city')){
			$city = $this->Session->read('city');
		}else{
			$city = 'nur-sultan';
		}
		if(isset($_GET['city']) && !empty($_GET['city'])){
			$city = $_GET['city'];
		}
		// $title_array = $this->Comp->findByAlias($city . '_about_metatitle');
		// $description_array = $this->Comp->findByAlias($city . '_about_description');
		// $keywords_array = $this->Comp->findByAlias($city . '_about_keywords');
		// if($title_array){
		// 	$title_for_layout = $title_array['Comp']['body'];
		// }
		// if($keywords_array){
		// 	$meta['keywords'] = $keywords_array['Comp']['body'];
		// }
		// if($description_array){
		// 	$meta['description'] = $description_array['Comp']['body'];
		// }
		
		
		
		//debug($slides);die;
		// }
		$bc_title = ($page['Page']['breadcrumbs']) ? $page['Page']['breadcrumbs'] : $title_for_layout;
		$bc = array(array('link' => '', 'title' => $bc_title));
		
		$is_admin = $this->Auth->user();

		$teams = '';
		if( $page_alias == 'about' ){
			$teams = $this->Team->find('all', array(
				'conditions' => array(
					'Team.page_id' => $page['Page']['id'],
				),
				'order' => 'Team.item_order DESC',
			));
		}

		$canonical = str_replace(array(
			'?city=nur-sultan', '&city=nur-sultan',
			'?city=aktau', '&city=aktau',
			'?city=pavlodar', '&city=pavlodar',
			'?city=karaganda', '&city=karaganda',
			'?city=almaty', '&city=almaty'),
			 '', $_SERVER['REQUEST_URI']);
		$this->set(compact('news', 'page', 'title_for_layout', 'meta', 'page_alias', 'bc', 'courses', 'canonical', 'teams'));

		if( $page_alias == 'about' ){
			$this->render('about');
		}

	}
	

	public function admin_index(){
		$this->Page->locale = array('en', 'kz', 'ru');

		// $this->Page->locale = array('kz', 'ru', 'kk');
		// $this->Page->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$pages = $this->Page->find('all', array(
			'recursive' => -1,
			'fields' => array('id', 'title', 'alias')
		));
		
		$count_pages = count($pages);
		
		$this->set(compact('pages', 'count_pages'));
	}

	public function admin_edit($page_id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Page->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Page->locale = 'en';
		}else{
			$this->Page->locale = 'ru';
		}
		
		if(is_null($page_id) || !(int)$page_id || !$this->Page->exists($page_id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Page->findById($page_id);
		if(!$page_id){
			throw new NotFoundException('Такой страницы нет...');
		}


		if($this->request->is(array('post', 'put'))){
			$this->Page->id = $page_id;
			// $this->Page->locale = Configure::read('Config.languages');
			// debug($this->Page->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Page'];

			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Page->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Page->locale = 'en';
			}else{
				$this->Page->locale = 'ru';
			}
			// $this->Page->locale = 'kz';
			// debug($data1);
			$data1['id'] = $page_id;
			if($this->Page->save($data1)){
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
			// $this->Page->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Page->read(null, $page_id);
		}

		$list = $this->Page->find('list', array(
			//'conditions' => array('Page.parent_id' => 0)
		));

		$this->Team->locale = array('en', 'kz', 'ru');

		$teams = $this->Team->find('all', array(
			'conditions' => array(
				'Team.page_id' => $page_id,
			),
			'order' => 'Team.item_order DESC',
		));
		
		$this->set(compact('page_id', 'data', 'list', 'teams'));
	}

	public function admin_add(){
		// if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
		// 		$this->Page->locale = 'kz';
		// 	}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
		// 		$this->Page->locale = 'en';
		// 	}else{
		// 		$this->Page->locale = 'ru';
		// 	}
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->Page->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Page->locale = 'en';
		}else{
			$this->Page->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->Page->create();
			$data = $this->request->data['Page'];
			// debug($data);
			// if(empty($data['img']['name'])){
			// 	$data['img']['name'] = 'empty';
			// 	$data['img']['tmp_name'] = 'empty';
			// }
			
			// if(!isset($data['img']['name']) || !$data['img']['name']){
			// 	$data['img'] = 'emtpy';
			// 	$this->Page->validator()->remove('img');
			// }
			
			//Создаем alias
			$slug = Inflector::slug(mb_strtolower($this->request->data['Page']['title']), '-');
			$data[] = $this->request->data['Page'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);
			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			// debug($data);

			//Проверка на уникальность alias	
			$check_alias = $this->Page->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");
				
			
			if($this->Page->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
					$fields = array('title', 'body', 'keywords', 'description');
					$this->change_to_lat('Page', 'pages', $fields, $data);
				}
				$new_page = $this->Page->findByAlias($data['alias']);
				return $this->redirect($this->referer());
				// $redirect_url = '/admin/pages/edit/'.$new_page['Page']['id'].'?lang=ru';
				// return $this->redirect($redirect_url);
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$list = $this->Page->find('list', array(
			//'conditions' => array('Page.parent_id' => 0)
		));
		$this->set(compact('list'));
	}

	public function admin_delete($id){
		$this->Page->locale = Configure::read('Config.language');

		if (!$this->Page->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Page->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}
