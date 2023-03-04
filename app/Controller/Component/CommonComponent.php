<?php 

App::uses('Component', 'Controller');

class CommonComponent extends Component {

	public function test(){
		return "Hello";
	}

	public function beauty_date($date){
        debug($date);
    }
}