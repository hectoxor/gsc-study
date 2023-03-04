<?php

class StaticPage extends AppModel{

	public $hasMany = array(
		'Comment' => array(
            'className'  => 'Comment',
            'conditions' => array('Comment.type' => 'StaticPage', 'Comment.active' => 1),
            'foreignKey' => 'material_id',
            'counterCache' => true
            // 'order'      => 'Recipe.created DESC'
        ),
	);
	
	public $actsAs = array(
		'Translate' => array(
			'title',
			'body',
			'keywords',
			'description',
			'tags'
			)
		);

	public function beforeValidate($options = array()){
	    
	        if(empty($this->data[$this->alias]["img"]["name"])){
	        unset($this->data[$this->alias]["img"]);
	        }
	  // debug($this->data[$this->alias]);
	        return true; //this is required, otherwise validation will always fail
	    
	}

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