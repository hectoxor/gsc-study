<?php 

class ErrorsController extends AppController{

    public function error(){
        header("HTTP/1.0 404 Not Found");
        // header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    }

    public function index(){
        $title_for_layout = 'Ошибка';

        // $data = $this->Error->find('all');
        // $this->set(compact('data', 'title_for_layout'));
    }

    public function admin_index(){
    //  $data = $this->Error->find('all');
    //  $title_for_layout = 'Клиенты';
    //  // debug($data);
    //  $this->set(compact('data', 'title_for_layout'));
    // }

    
	}
}