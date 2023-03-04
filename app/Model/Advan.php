<?php 

class Advan extends AppModel{
	public $actsAs = array(
		'Translate' => array(
			'title',
			'body',
		)
	);

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите заголовок'
		),
	);
}

 ?>