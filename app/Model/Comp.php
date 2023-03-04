<?php 

class Comp extends AppModel{

	public $actsAs = array(
		'Translate' => array(
			'body',
			)
		);
}