<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{
	// public $belongsTo = array(
	// 	'Category'=>array(
	// 		'className' => 'Category'
	// 	),
	// 	'City' => array(
	//            'className'  => 'City',
	//            // 'joinTable' => 'cities_categories',
	// //   //           // 'conditions' => array('Recipe.approved' => '1'),
	// //   //           // 'order'      => 'Recipe.created DESC'
	//         ),
	// );

	public $validate = array(
		'username' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Введите логин'
	        ),
		
		'password' =>  array(
	        'length' => array(
	            'rule'      => array('between', 6, 40),
	            'message'   => 'Your password must be between 6 and 40 characters.',
	            'on'        => 'create',  // we only need this validation on create
	        ),
	    ),
	    'password_repeat' => array(
	        'compare' => array(
	            'rule'    => array('validate_passwords'),
	            'message' => 'Please confirm the password',
	        ),
	    ),
	);

	public function validate_passwords() { //password match check
	    return $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_repeat'];
	}

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $passwordHasher = new BlowfishPasswordHasher();
	        $this->data[$this->alias]['password'] = $passwordHasher->hash(
	            $this->data[$this->alias]['password']
	        );
	    }
	    return true;
	}

}