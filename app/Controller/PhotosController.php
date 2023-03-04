<?php

class PhotosController extends AppController{

	// public $uses = array('Photo', 'Project');

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		
	}


	public function admin_index(){
		$data = $this->Photo->find('all', array(
			'order' => array("Photo.id" => 'desc')
		));
		// debug($data);
		// die;
		$this->set(compact('data'));
	}

	public function admin_add(){
		
		if( $this->request->is('post') ){
			$this->Photo->create();

			$data = $this->request->data['Photo'];
			
			if( $this->Photo->save($data) ){
				$this->Session->setFlash('Фото добавлено', 'default', array(), 'good');
				return $this->redirect( $this->referer() );
			} else{
				$this->Session->setFlash('Ошибка добавления', 'default', array(), 'bad');
			}
		}
		
		// if($this->request->is('post')){
		// 	$this->Photo->create();
		// 	$data = $this->request->data['Photo'];
		// 	$parent_id = $data['university_id'];
		// 	if(isset($data['img'][0])){
		// 		$img_count = count($data['img']);
		// 		$new_img = $data['img'];
		// 		unset($data['img']);
		// 		for($i = 0; $i <= $img_count-1; $i++){
		// 			// debug($new_img[1]);die;
		// 			$img_name = $this->customUploadImg($new_img[$i]);
						
		// 			$q = "INSERT INTO photos (university_id, img) VALUES ($parent_id, '".$img_name."')";

		// 			$this->Photo->query($q);
		// 			$this->Session->setFlash('Сохранено', 'default', array(), 'good');
		// 		}
		// 		return $this->redirect('/admin/universities');
				
		// 	}
		// }
		
	}



	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Photo->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Photo->findById($id);

		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Photo->id = $id;
			
			$data1 = $this->request->data['Photo'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			$data1['id'] = $id;
			
			if($this->Photo->save($data1)){
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



	public function admin_delete($id){
		if (!$this->Photo->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->Photo->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		
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