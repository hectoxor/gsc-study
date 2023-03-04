<?php

class CitiesController extends AppController{

	public $components = array('Paginator');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->City->locale = Configure::read('Config.language');
		
		$this->City->hasMany['Photo']['limit'] = 100;
		$this->Paginator->settings = array(
			'order' => array('City.id DESC'),
			'limit' => 100,
		);
		$data = $this->Paginator->paginate('City');

	
		
		$title_for_layout = __('Проекты');
		
		$this->set(compact('data', 'title_for_layout'));
	}


	public function admin_index(){
		$this->City->locale = array('en', 'kz', 'ru');
		
		$data = $this->City->find('all', array(
			'order' => array("City.id" => 'ASC')
		));
		// debug($data);
		// die;
		$this->set(compact('data'));
	}

	public function admin_add(){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->City->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->City->locale = 'en';
		}else{
			$this->City->locale = 'ru';
		}

		if($this->request->is('post')){
			$this->City->create();
			$data = $this->request->data['City'];

			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}

			$slug = Inflector::slug(mb_strtolower($this->request->data['City']['title']), '-');
			$data[] = $this->request->data['City'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);

			//Проверка на уникальность alias	
			$check_alias = $this->City->findByAlias($data['alias']);
			if(!empty($check_alias)) $data['alias'] = $data['alias'] . '-' . date("YmdHis");

			
			if($this->City->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
			// $c_id = $data['category_id'];
			// $title = $data['title'];
			
			// $date = $data['date']['year']."-".$data['date']['month']."-".$data['date']['day'];
			// debug(count($data['img']));die;
			// if(isset($data['img'][0])){
			// 	$img_count = count($data['img']);
			// 	$img_count2 = count($data['img']);
			// 	$img_count3 = count($data['img']);
			// 	$new_img = $data['img'];
			// 	unset($data['img']);
			// 	$p_l_id = 0;
			// 	$this->City->save($data);

			// 	$last_work_id = $this->City->getLastInsertId();
			// 	for($i = 0; $i <= $img_count-1; $i++){
			// 		// debug($new_img[1]);die;
			// 		$img_name = $this->customUploadImg($new_img[$i]);

					
			// 		$q = "INSERT INTO photos (work_id, img) VALUES ($last_work_id,  '".$img_name."')";
			// 		$this->City->query($q);
					
					
			// 		$this->Session->setFlash('Сохранено', 'default', array(), 'good');
			// 	}
			
			// }
		}

		// $cats = $this->City->CategoryCity->find('list');
		// $this->set(compact('cats'));

		
	}

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
			$this->City->locale = 'kz';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->City->locale = 'en';
		}else{
			$this->City->locale = 'ru';
		}

		if(is_null($id) || !(int)$id || !$this->City->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->City->findById($id);
		// debug($data);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->City->id = $id;
			$data1 = $this->request->data['City'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

			$data1['id'] = $id;



			if($this->City->save($data1)){
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
			$data = $this->request->data = $this->City->read(null, $id);
		}
		// $photos = $this->City->Photo->find('all', array(
		// 	'conditions' => array('Photo.project_id' => $id),
		// 	'order' => array('Photo.id' => 'DESC')
		// ));
		// $cats = $this->City->CategoryCity->find('list');
		$this->set(compact('id', 'data', 'photos', 'cats'));

	}



	public function admin_delete($id){
		$this->City->locale = Configure::read('Config.language');

		if (!$this->City->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->City->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($alias){
		$this->City->locale = Configure::read('Config.language');

		$data = $this->City->findByAlias($alias);
		if(!$data){
			throw new NotFoundException('Такой страницы нет...');
		}
		$bc = array(array('link' => '/category-projects', 'title' => 'Пректы'), array('link' => '/category-projects/' . $data['CategoryCity']['alias'], 'title' => $data['CategoryCity']['title']), array('link' => '', 'title' => $data['City']['title']));
		$title_for_layout = ($data['City']['meta_title']) ? $data['City']['meta_title'] : $data['City']['title'];

		$title_for_layout = $data['City']['title'];
		$meta['keywords'] = $data['City']['keywords'];
		$meta['description'] = $data['City']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta', 'bc'));
	}


	public function customUploadImg($file = array()){
		// debug($file);die;
		if(!is_uploaded_file($file['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['name']));
		$fileName = $this->genNameFile($ext);
		$path = WWW_ROOT . 'img/photos/' . $fileName;
		$path_th = WWW_ROOT . 'img/photos/thumbs/' . $fileName;
		if(!move_uploaded_file($file['tmp_name'], $path)){
			return false;
		}
		$this->resizeImg($path, $path_th, 600, 600, $ext);
		// debug($fileName);die;
		return $fileName;
	}

	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'img/photos/' . $name)){
			$name = $this->genNameFile($ext);
		}
		return $name;
	}

	public function resizeImg($target, $dest, $wmax = 269, $hmax = 178, $ext){
		/*
		$target - путь к оригинальному файлу
		$dest - путь сохранения обработанного файла
		$wmax - максимальная ширина
		$hmax - максимальная высота
		$ext - расширение файла
		*/
		list($w_orig, $h_orig) = getimagesize($target);
		$ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная

		if(($wmax / $hmax) > $ratio){
			$wmax = $hmax * $ratio;
		}else{
			$hmax = $wmax / $ratio;
		}
		
		$img = "";
		// imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
		switch($ext){
			case("gif"):
				$img = imagecreatefromgif($target);
				break;
			case("png"):
				$img = imagecreatefrompng($target);
				break;
			default:
				$img = imagecreatefromjpeg($target);    
		}
		$newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки
		
		if($ext == "png"){
			imagesavealpha($newImg, true); // сохранение альфа канала
			$transPng = imagecolorallocatealpha($newImg,0,0,0,127); // добавляем прозрачность
			imagefill($newImg, 0, 0, $transPng); // заливка  
		}
		
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
		switch($ext){
			case("gif"):
				imagegif($newImg, $dest);
				break;
			case("png"):
				imagepng($newImg, $dest);
				break;
			default:
				imagejpeg($newImg, $dest);    
		}
		imagedestroy($newImg);
	}
}