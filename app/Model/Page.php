<?php

class Page extends AppModel{
	
	public $actsAs = array(
		'Translate' => array(
			'title',
			'body',
			'breadcrumbs',
			'h1',
			'meta_title',
			'keywords',
			'description'
			)
		);


	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите название'
		),
		'body' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите текст'
		)
	);

	
}