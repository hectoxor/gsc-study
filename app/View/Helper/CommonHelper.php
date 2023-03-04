<?php 
App::uses('AppHelper', 'View/Helper');
class CommonHelper extends AppHelper {

	public function beauty_date($date){
		$date = explode("-", $date);
		switch ($date[1]) {
			case 1: $date[1] = __('январь'); break;
			case 2: $date[1] = __('февраль'); break;
			case 3: $date[1] = __('март'); break;
			case 4:	$date[1] = __('апрель'); break;
			case 5: $date[1] = __('май'); break;
			case 6: $date[1] = __('июнь'); break;
			case 7: $date[1] = __('июль'); break;
			case 8: $date[1] = __('август'); break;
			case 9: $date[1] = __('сентябрь'); break; 
			case 10: $date[1] = __('октябрь'); break;
			case 11: $date[1] = __('ноябрь'); break;
			case 12: $date[1] = __('декабрь'); break;
			default: break;
		}
		return $date[2] ." ". $date[1] ." ". $date[0];
	}

	public function get_month($date){
		$date = explode("-", $date);
		switch ($date[1]) {
			case 1: $date[1] = __('январь'); break;
			case 2: $date[1] = __('февраль'); break;
			case 3: $date[1] = __('март'); break;
			case 4:	$date[1] = __('апрель'); break;
			case 5: $date[1] = __('май'); break;
			case 6: $date[1] = __('июнь'); break;
			case 7: $date[1] = __('июль'); break;
			case 8: $date[1] = __('август'); break;
			case 9: $date[1] = __('сентябрь'); break; 
			case 10: $date[1] = __('октябрь'); break;
			case 11: $date[1] = __('ноябрь'); break;
			case 12: $date[1] = __('декабрь'); break;
			default: break;
		}
		return $date[1];
	}

	public function get_day($date){
		$date = explode("-", $date);
		return $date[2];
	}

	public function get_year($date){
		$date = explode("-", $date);
		return $date[0];
	}

	public function get_element($id) {
    	App::import("Model", "Comp");  
		$model = new Comp();
		// $model->locale = Configure::read('Config.language');
		$data = $model->findById($id);
		// debug($data);
		if($data){
			if($data['Comp']['body']){
				return $data['Comp']['body'];
			// }else{
			// 	return $data[0]['Comp__i18n_body'];
			}
			
		}
		// else{
		// 	$model->locale = 'ru';
		// 	$data = $model->findById($id);
		// 	if($data['Comp']['body']){
		// 		return $data['Comp']['body'];
		// 	}else{
		// 		return $data[0]['Comp__i18n_body'];
		// 	}
		// }
		
    }

    public function get_city($alias) {
    	App::import("Model", "City");  
		$model = new City();
		$model->locale = Configure::read('Config.language');
		// debug($alias);die;
		if(isset($alias) && !empty($alias)){
			$data = $model->findByAlias($alias);
			// debug($data);
			if($data){
				if($data['City']['body']){
					return $data['City']['title'];
				}else{
					return $data[0]['City__i18n_title'];
				}
				
			}
		}else{
			return 'Нур-Султан';
		}
		
		// else{
		// 	$model->locale = 'ru';
		// 	$data = $model->findById($id);
		// 	if($data['Comp']['body']){
		// 		return $data['Comp']['body'];
		// 	}else{
		// 		return $data[0]['Comp__i18n_body'];
		// 	}
		// }
		
    }

    public function get_address($city_alias){
    	App::import("Model", "Contact");  
    	App::import("Model", "City");  
		$model = new Contact();
		$city = new City();
		$city_data = $city->findByAlias($city_alias);
		// debug($city_data);die;
		$data = $model->find('first', array(
			'conditions' => array('Contact.city_id' => $city_data['City']['id'])
		));
		return $data['Contact']['address'];
    }

    public function get_phone($city_alias){
    	App::import("Model", "Contact");  
    	App::import("Model", "City");  
		$model = new Contact();
		$city = new City();
		$city_data = $city->findByAlias($city_alias);
		// debug($city_data);die;
		$data = $model->find('first', array(
			'conditions' => array('Contact.city_id' => $city_data['City']['id'])
		));
		return $data['Contact']['phone1'];
    }

}

