<?php

App::uses('Controller', 'Controller', 'CakeEmail', 'Network/Email');

class AppController extends Controller {

    public $uses = array('App','Comp', 'City', 'Course');

	public $components = array('DebugKit.Toolbar', 'Cookie', 'Session', 'Auth' => array(
            'loginRedirect' => '/admin/news',
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller'),
            'authError' => 'Вы не имеете прав доступа к данной странице'
        ));
	public $helpers = array('Html', 'Form', 'Session', 'Common');

    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

    public function beforeFilter() {
        
        parent::beforeFilter();
        $this->Auth->allow('index', 'view');
        
        if($_SERVER['REQUEST_URI'] == '/country/%20czech?type=yazykovye-kursy'){
            // var_dump('1');
            $this->redirect(array(
            'controller' => 'country', 'action' => 'czech', '?' => array('type' =>'yazykovye-kursy'
            )), 301);
        }
        if($_SERVER['REQUEST_URI'] == '/country/%20czech?type=vuz'){
            $this->redirect(array(
            'controller' => 'country', 'action' => 'czech', '?' => array('type' =>'vuz'
            )), 301);
        }

        if($_SERVER['REQUEST_URI'] == '/almaty?city=almaty'){
             $this->redirect('/almaty', 301);
        }
        if($_SERVER['REQUEST_URI'] == '/almaty?city=nur-sultan'){
             $this->redirect('/', 301);
        }
        if($_SERVER['REQUEST_URI'] == '/almaty?city=pavlodar'){
             $this->redirect('/pavlodar', 301);
        }
        if($_SERVER['REQUEST_URI'] == '/almaty?city=karaganda'){
             $this->redirect('/karaganda', 301);
        }
        if($_SERVER['REQUEST_URI'] == '/almaty?city=aktau'){
             $this->redirect('/aktau', 301);
        }

        
        $admin = (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') ? 'admin/' : false;
        if(!$admin) $this->Auth->allow();
        if($admin){
            $this->layout = 'default';
        }elseif($this->params['controller']=='users' && $this->params['action']=='login'){
            $this->layout = 'login';
        }else{
            
            if($this->params['controller']=='pages' && $this->action == 'index'){
                $this->layout = 'index'; 
            }else{
                $this->layout = 'page'; 
            }
            
        }

        if(isset($this->params['language']) && $this->params['language'] == 'kz'){
            Configure::write('Config.language', 'kz');
            $this->Session->write('lang',  'kz');
        }elseif(isset($this->params['language']) && $this->params['language'] == 'en'){
            Configure::write('Config.language', 'en');
            $this->Session->write('lang',  'en');
        }else{
            Configure::write('Config.language', 'ru');
        }
        $l = Configure::read('Config.language');
        $lang = ($this->params['language']) ? $this->params['language'] . '/' : '';

        $this->City->locale = Configure::read('Config.language');
        $this->Comp->locale = Configure::read('Config.language');
        $this->Course->locale = Configure::read('Config.language');

        $cities = $this->City->find('all');
        $params = $this->Comp->find('all');
        if(isset($_GET['city']) && !empty($_GET['city'])){
            $this->Session->write('city',  $_GET['city']);
        }
        
        if($this->Session->check('city') == false){
            $this->Session->write('city',  'nur-sultan');
        }
        $current_city = $this->Session->read('city');
        $courses  = $this->Course->find('all', array(
            'conditions' => array('Course.active' => 1),
            'order' => array('Course.priority' => 'DESC')
        ));
		//debug($cities);
        // if(isset($_GET['city']) && !empty($_GET['city'])){
        //     $alias = $_GET['city'];
        // }
        // $_SESSION['city'] = $_GET['city'];
        // if(!isset($_SESSION['city'])){
        //     $_SESSION['city'] = 'nur-sultan';
        // }
        // $this->Session->write('test1', 'Green2');
        //  if(isset($this->Session->read('city')) && !empty($this->Session->read('city'))){
            // debug($this->Session->check('city'));
        // }
        // debug($this->Session->read('city'));die;
        
        $this->set(compact('admin', 'params', 'cities', 'courses', 'current_city', 'l', 'lang'));

    }

    

}
