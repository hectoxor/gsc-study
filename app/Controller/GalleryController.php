<?php

class GalleryController extends AppController{

	// public $uses = array('Gallery', 'Project');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		$this->Gallery->locale = Configure::read('Config.language');
		// $this->Gallery->Project->bindTranslation(array('title' => 'titleTranslation'));
		// $year = (int)$year;
		// $this->News->locale = Configure::read('Config.language');
		$this->Gallery->Category->locale = Configure::read('Config.language');
		$this->Gallery->Category->bindTranslation(array('title' => 'titleTranslation'));
		
		$filter[] = array('Category.type' => 'galleries');

		$data = $this->Gallery->Category->find('all', array(
			// 'order' => array("Gallery.id" => 'desc'),
			'conditions' => array('Category.type' => 'galleries')
			// 'limit'=>4
		));
		// debug($data);
		$title_for_layout = __('Галерея');
		$categories = $this->Gallery->Category->find('all', array(
			'recursive' => -1,
			'conditions' => array('Category.type' => 'galleries')
		));

		// $news = $this->News->find('all', array(
		// 	'fields' => array('id', 'title'),
		// 	'order' => array('News.created' => 'desc'),
		// 	'limit' => 3
		// 	));
		$this->set(compact('data', 'title_for_layout', 'categories'));
	}

	public function admin_index(){
			$this->Gallery->locale = array('ru', 'kz');
			$this->Gallery->bindTranslation(array('title' => 'titleTranslation'));
			$data = $this->Gallery->find('all', array(
				'order' => array("Gallery.id" => 'desc')
			));
			// debug($data);
			// die;
			$this->set(compact('data'));
		}

	public function admin_add(){
		

		if($this->request->is('post')){
			$this->Gallery->create();
			$data = $this->request->data['Gallery'];
			$album_id = $data['album_id'];
			if(isset($data['img'][0])){
				$img_count = count($data['img']);
				$new_img = $data['img'];
				unset($data['img']);
				for($i = 0; $i <= $img_count-1; $i++){
					// debug($new_img[1]);die;
					$img_name = $this->customUploadImg($new_img[$i]);
						
					$q = "INSERT INTO galleries (album_id, img) VALUES ($album_id, '".$img_name."')";

					$this->Gallery->query($q);
					$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				}
				return $this->redirect('/admin/albums');
				
			}
		}
			
		$this->set(compact('albums'));
		
	}

	public function customUploadImg($file = array()){
		// debug($file);die;
		if(!is_uploaded_file($file['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['name']));
		$fileName = $this->genNameFile($ext);
		$path = WWW_ROOT . 'img/gallery/' . $fileName;
		$path_th = WWW_ROOT . 'img/gallery/thumbs/' . $fileName;
		if(!move_uploaded_file($file['tmp_name'], $path)){
			return false;
		}
		$this->resizeImg($path, $path_th, 366, 273, $ext);
		// debug($fileName);die;
		return $fileName;
	}

	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'img/gallery/' . $name)){
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

	public function admin_edit($id){
		if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'ru'){
			$this->Gallery->locale = 'ru';
			$this->Gallery->Category->locale = 'ru';
		}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
			$this->Gallery->locale = 'en';
		}else{
			$this->Gallery->locale = 'kz';
			$this->Gallery->Category->locale = 'kz';
		}
		if(is_null($id) || !(int)$id || !$this->Gallery->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Gallery->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		

		if($this->request->is(array('post', 'put'))){
			$this->Gallery->id = $id;
			$data1 = $this->request->data['Gallery'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Gallery->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				$fields = array('title');
					$this->change_to_lat('Gallery', 'galleries', $fields, $data1);
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
			$this->Gallery->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Gallery->read(null, $id);
		}
			
			$categories = $this->Gallery->Category->find('all', array(
				'conditions' => array('Category.type' => 'galleries')
			));
			$albums = $this->Gallery->find('all', array(
			'conditions' => array(
				array('Gallery.parent_id' => 0), 
				array('Gallery.instagram' => '')
				)
		));
			$this->set(compact('id', 'data', 'categories', 'albums'));
	}

	public function admin_delete($id){
		if (!$this->Gallery->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->Gallery->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		// $this->Gallery->locale = false;
		$this->Gallery->locale = Configure::read('Config.language');
		$album_id = $this->Gallery->findById($id);
		$data = $this->Gallery->find('all', array(
			// 'fields' => array('id', 'img'),
			'order' => array("Gallery.id" => 'desc'),
			'conditions' => array(
				array("Gallery.parent_id" => $id)
			)
		));

		$this->Gallery->query("UPDATE `galleries` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");
		// debug($album_id);

		if(!$album_id){
			throw new NotFoundException('Такой страницы нет...');
		}

		$title_for_layout = __('Галерея');
		// $meta['keywords'] = $data['News']['keywords'];
		// $meta['description'] = $data['News']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta', 'album_id'));
	}



}