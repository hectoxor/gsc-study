<?php

class AlbumsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		
		
		$data = $this->Album->find('all', array(
			// 'recursive' => -1
		));
		$albums = array();
		// $this->Album->hasMany['Gallery']['limit'] = 1;
		// foreach($categories as $item){
		// 	$albums[] = $this->Album->find('all', array(
		// 		'order' => array('Album.id' => 'desc'),
		// 		'conditions' => array('Album.category_id' => $item['Category']['id']),
		// 		'limit' => 4,
		// 	));
		// }
		
		$title_for_layout = __('Галерея');
		
		$this->set(compact('data', 'title_for_layout'));
	}



	public function admin_index(){
			// $this->Album->locale = array('ru', 'kz');
			// $this->Album->bindTranslation(array('title' => 'titleTranslation'));
			$data = $this->Album->find('all', array(
				'order' => array("Album.id" => 'desc')
			));
			// debug($data);
			// die;
			$this->set(compact('data'));
		}

	public function admin_add(){
		
		if($this->request->is('post')){
			$this->Album->create();
			$data = $this->request->data['Album'];
			// debug(count($data['img']));die;
			if(isset($data['img'][0])){
				$img_count = count($data['img']);
				$new_img = $data['img'];
				unset($data['img']);
				$this->Album->save($data);
				$last_album_id = $this->Album->getLastInsertId();
				for($i = 0; $i <= $img_count-1; $i++){
					// debug($new_img[1]);die;
					$img_name = $this->customUploadImg($new_img[$i]);
					$q = "INSERT INTO galleries (album_id, img) VALUES ($last_album_id,  '".$img_name."')";
					$this->Album->query($q);
					$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				}
			}
		}
		$this->set(compact('albums'));
		
	}

	public function admin_edit($id){

		if(is_null($id) || !(int)$id || !$this->Album->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$data = $this->Album->findById($id);
		// debug($data);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Album->id = $id;
			$data1 = $this->request->data['Album'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}

		

			$data1['id'] = $id;

			if($this->Album->save($data1)){
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
			$data = $this->request->data = $this->Album->read(null, $id);
		}
		$photos = $this->Album->Gallery->find('all', array(
			'conditions' => array('Gallery.album_id' => $id),
			'order' => array('Gallery.id' => 'DESC')
		));

		
			$this->set(compact('id', 'data', 'photos'));

	}



	public function admin_delete($id){
		if (!$this->Album->exists($id)) {
			throw new NotFounddException('Такой фотографии нету');
		}
		if($this->Album->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$data = $this->Album->findById($id);
		
		// $pictures = $this->Album->Picture->find('all', array(
		// 	'recursive' => -1,
		// 	'order' => array('Picture.id' => 'DESC'),
		// 	'conditions' => array('Picture.gallery_id' => $id)
		// ));
		// debug($data);
		$this->Album->query("UPDATE `albums` SET `views` = `views` + 1 WHERE `id`='" . $id . "'");
		// debug($album_id);

		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}

		$title_for_layout = $data['Album']['title'];
		// $meta['keywords'] = $data['News']['keywords'];
		// $meta['description'] = $data['News']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta'));
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
}