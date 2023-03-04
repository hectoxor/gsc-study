<?php
class Setting extends AppModel{
	
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите текст'
		),
	);

}