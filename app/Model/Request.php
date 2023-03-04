<?php 

class Request extends AppModel{
	
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите название'
		),
		'body' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите текст'
		),
		'doc' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Ошибка загрузки картинки',
				'allowEmpty' => true
			),
			'extension' => array(
		        'rule' => array('extension', array('docx', 'doc')),
		        'message' => 'Only docx files',
	         ),
			// 'mimeType' => array(
			// 	'rule' => array('mimeType', array('application/msword', 'application/vnd.ms-office')),
			// 	'message' => 'Ошибка загрузки файла'
			// ),
			// 'mimeType' => array(
			// 	'rule' => array('mimeType', array('image/jpg', 'image/jpeg', 'image/png', 'image/gif')),
			// 	'message' => 'Ошибка загрузки картинки'
			// ),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '2MB'),
				'message' => 'Максимальный размер документа 2MB'
			),
			'customUploadImg' => array(
				'rule' => 'customUploadImg',
				'message' => 'Ошибка обработки документа'
			)
		)
	);

	public function customUploadImg($file = array()){
		if(!is_uploaded_file($file['doc']['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['doc']['name']));
		$fileName = $this->genNameFile($ext);
		$path = WWW_ROOT . 'files/requests/' . $fileName;
		// $path_th = WWW_ROOT . 'files/requests/thumbs/' . $fileName;
		if(!move_uploaded_file($file['doc']['tmp_name'], $path)){
			return false;
		}
		// $this->resizeImg($path, $path_th, 635, 422, $ext);
		$this->data[$this->alias]['doc'] = $fileName;
		return true;
	}

	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'files/requests/' . $name)){
			$name = $this->genNameFile($ext);
		}
		return $name;
	}
	
}