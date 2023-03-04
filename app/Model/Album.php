<?php 

class Album extends AppModel{

	// public $belongsTo = 'Category';
	public $hasMany = 'Gallery';
	// public $actsAs = array(
	// 	'Translate' => array(
	// 		'title',
	// 		// 'country'
	// 		)
	// 	);

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите название'
		)
	);

	
}