<?php

App::uses('CakeEmail', 'Network/Email');

class RequestsController extends AppController {

	// public $uses = array('Request', 'Banner');
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session');

	public function admin_index(){
		$data = $this->Request->find('all', array('order' => array('Request.id' => 'desc')));
		
		$this->set(compact('data'));
	}

	public function index(){
		if(!empty($this->request->data)){
			$data = $this->request->data;
			// $this->Request->create();
			$email = new CakeEmail('smtp');
			// debug($data);die;
			$email->from(array('no-reply@gscstudy.kz' => 'gscstudy.kz'))
			->to('kamilya@gscenter.kz')
			// ->to('')
			->subject('Новые письмо с сайта');
			
			$message = 'Имя: ' . $data['name'] . ', Телефон: ' . $data['phone'];
			
			
			if( $email->send($message) ){
			// if( $this->Request->save($data) ){
				$this->Session->setFlash('Заявка успешно отправлена, в ближайшее время с Вами свяжется наш менеджер. Спасибо!', 'default', array(), 'good');
				return $this->redirect('http://gscstudy.kz?status=1');
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
				return $this->redirect('http://gscstudy.kz?status=2');
			}
		}
	}

	public function send(){
		if(!empty($this->request->data)){
			$data = $this->request->data;

			// $this->Request->create();
			// $r1 = $data['r1'];
			// $r2 = $data['r2'];
			// $r_sum = $r1 + $r2;
			// if(isset($data['robot']) && $data['robot'] == $r_sum){

			if( isset($data['g-recaptcha-response']) && $data['g-recaptcha-response'] ){

		        $toSend = json_encode(array(
		            "fullName" =>   isset($data['name']) ? $data['name'] : "",
		            "phone" =>      isset($data['phone']) ? $data['phone'] : "",
		            "type"=>        isset($_POST['page']) ? $_POST['page']: "",
		            "email"=>       isset($data['mail']) ? $data['mail']: "",
		            "office"=>      isset($data['city']) ? ($data['city']): "",
		            "description"=> isset($data['question']) ? ($data['question']): "",
		            "roistat"=>     isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : "",
		            "utm_source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "", // UTM-метка «Рекламная система»
		            "utm_medium" => isset($_COOKIE['medium']) ? $_COOKIE['medium'] : "" ,// UTM-метка «Тип трафика»
		            "utm_campaign"=>isset($_COOKIE['campaign']) ? $_COOKIE['campaign'] : "", // UTM-метка «Обозначение рекламной кампании»
		            "utm_term"=>    isset($_COOKIE['term']) ? $_COOKIE['term'] : "",// UTM-метка «Условие поиска кампании»
		            "utm_content"=> isset($_COOKIE['content']) ? $_COOKIE['content'] : "", // UTM-метка «Содержание кампании»
		        ));

		        $ch = curl_init("https://gscastana.t8s.ru/Api/V2/AddStudyRequest");
		        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		        if(isset($data['url'])){
		                curl_setopt($ch, CURLOPT_REFERER, strip_tags($data['url']));
		            }
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $toSend);
		        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,5);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		        $result = curl_exec($ch);
		        curl_close($ch);

		        /*------------ Auth Token ----------*/

		        $ch      = curl_init();
		        $api_data    = ['email' => 'fabdykhalykova@gmail.com', 'api_key' => '26d9e74a-b3dc-11eb-9aef-ac1f6b4782be'];

		        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json', 'Content-Type: application/json']);
		        curl_setopt($ch, CURLOPT_URL, 'https://gscstudy.s20.online/v2api/auth/login');
		        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($api_data));
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		        $result = json_decode(curl_exec($ch), true);
		        $code   = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		        if (curl_errno($ch))
		            throw new \Exception('Curl error');

		        curl_close($ch);

		        if ($code !== 200)
		            throw new \Exception($result['name'] . ' - ' . $result['message']);

		        $token = $result['token'];

		        /*------------ Auth Token END ----------*/
				
				
				$email = new CakeEmail('smtp');
				$send_email = 'info@gscenter.kz';
				if($data['city'] == 'Нур-Султан'){
					$send_email = 'kamilya@gscenter.kz';
					// $send_email = ''venera.bai@gscenter.kz;
					
					// $ch = curl_init();
					// 	curl_setopt($ch, CURLOPT_URL, "https://gscstudy.s20.online/api/1/lead/create?token=c4ca4238a0b923820dcc509a6f75849b");
					// 	curl_setopt($ch, CURLOPT_POST, true);
					// 	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
					// 		"name" =>   isset($data['name']) ? $data['name'] : "",
					// 		"phone" =>      isset($data['phone']) ? $data['phone'] : "",
					// 		"email"=>       isset($data['mail']) ? $data['mail']: "",
					// 		"office"=>      isset($data['city']) ? ($data['city']): "",
					// 		"birthday"=>    isset($data['date']) ? ($data['date']): "",
					// 		"note"=>       isset($description) ? ($description): "",
					// 		"source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "",
					// 	]));
						
					// 	$result = curl_exec($ch);
					// 	curl_close($ch);

					/*--------- Old Method API-------*/


					/*--------- New Method API -------*/

					$name = isset($data['name']) ? $data['name'] : '';
					$phone = isset($data['phone']) ? $data['phone'] : '';
					$note = isset($data['note']) ? $data['note'] : '';
					$custom_edu_type = isset($data['custom_edu_type']) ? $data['custom_edu_type'] : '';

					$ch = curl_init();

					curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-ALFACRM-TOKEN: '.$token, 'Accept: application/json', 'Content-Type: application/json']);
					curl_setopt($ch, CURLOPT_URL, 'https://gscstudy.s20.online/v2api/3/customer/create');
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_POSTFIELDS, '{"name":"'.$name.'", "phone":"'.$phone.'", "note":"'.$note.'", "custom_edu_type":"'.$custom_edu_type.'", "branch_ids":"3", "legal_type":"1", "is_study":"0", "lead_source_id":"3"}');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					$result = json_decode(curl_exec($ch), true);
					$code   = curl_getinfo($ch, CURLINFO_HTTP_CODE);

					if (curl_errno($ch))
					    throw new \Exception('Curl error');

					curl_close($ch);

					/*--------- New Method API END -------*/

				}
				if($data['city'] == 'Алматы'){
					$send_email = 'dilshat@gsc.kz';
						// $ch = curl_init();
						// curl_setopt($ch, CURLOPT_URL, "https://gscstudy.s20.online/api/1/lead/create?token=c4ca4238a0b923820dcc509a6f75849b");
						// curl_setopt($ch, CURLOPT_POST, true);
						// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
						// 	"name" =>   isset($data['name']) ? $data['name'] : "",
						// 	"phone" =>      isset($data['phone']) ? $data['phone'] : "",
						// 	"email"=>       isset($data['mail']) ? $data['mail']: "",
						// 	"office"=>      isset($data['city']) ? ($data['city']): "",
						// 	"birthday"=>    isset($data['date']) ? ($data['date']): "",
						// 	"note"=>       isset($description) ? ($description): "",
						// 	"source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "",
						// ]));
						
						// $result = curl_exec($ch);
						// curl_close($ch);

					/*--------- New Method API -------*/

					$name = isset($data['name']) ? $data['name'] : '';
					$phone = isset($data['phone']) ? $data['phone'] : '';
					$note = isset($data['note']) ? $data['note'] : '';

					$ch = curl_init();

					curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-ALFACRM-TOKEN: '.$token, 'Accept: application/json', 'Content-Type: application/json']);
					curl_setopt($ch, CURLOPT_URL, 'https://gscstudy.s20.online/v2api/1/customer/create');
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_POSTFIELDS, '{"name":"'.$name.'", "phone":"'.$phone.'", "note":"'.$note.'", "custom_edu_type":"'.$custom_edu_type.'", "branch_ids":"1", "legal_type":"1", "is_study":"0", "lead_source_id":"3"}');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					$result = json_decode(curl_exec($ch), true);
					$code   = curl_getinfo($ch, CURLINFO_HTTP_CODE);

					if (curl_errno($ch))
					    throw new \Exception('Curl error');

					curl_close($ch);

					/*--------- New Method API END -------*/
				}
				if($data['city'] == 'Актау'){
					$send_email = 'dilshat@gsc.kz';
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, "https://gscstudy.s20.online/api/1/lead/create?token=c4ca4238a0b923820dcc509a6f75849b");
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
							"name" =>   isset($data['name']) ? $data['name'] : "",
							"phone" =>      isset($data['phone']) ? $data['phone'] : "",
							"email"=>       isset($data['mail']) ? $data['mail']: "",
							"office"=>      isset($data['city']) ? ($data['city']): "",
							"birthday"=>    isset($data['date']) ? ($data['date']): "",
							"note"=>       isset($description) ? ($description): "",
							"source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "",
						]));
						
						$result = curl_exec($ch);
						curl_close($ch);
				}
				if($data['city'] == 'Караганда'){
					$send_email = 'alibek@gscstudy.kz';
				}
				if($data['city'] == 'Павлодар'){
					$send_email = 'alibek@gscstudy.kz';
				}			
				$email->from(array('no-reply@gscstudy.kz' => 'gscstudy.kz'))
				->to($send_email)
				// ->to('')
				->subject('Новые письмо с сайта');
				
				$message = 'Страница: ' . $data['page'] . ', Имя: ' . $data['name'] . ', Телефон: ' . $data['phone'];

				if( isset($data['mail']) && $data['mail'] ){
					$message .= ', E-mail: ' . $data['mail'];
				}
				if( isset($data['question']) && $data['question'] ){
					$message .= ', Вопрос: ' . $data['question'];
				}
				
				
				if( $email->send($message) ){
				// if( $this->Request->save($data) ){
					$this->Session->setFlash('Заявка успешно отправлена, в ближайшее время с Вами свяжется наш менеджер. Спасибо!', 'default', array(), 'good');
					return $this->redirect($this->referer());
				}else{
					$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
					return $this->redirect($this->referer());
				}
			}else{
				$this->Session->setFlash('Проверочный код введен неверно', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
			//
		}
	}


	public function sendAbroad(){
		if(!empty($this->request->data)){
			$data = $this->request->data;
	
			// $this->Request->create();
			// $r1 = $data['r1'];
			// $r2 = $data['r2'];
			// $r_sum = $r1 + $r2;
			// if(isset($data['robot']) && $data['robot'] == $r_sum){

			if( isset($data['g-recaptcha-response']) && $data['g-recaptcha-response'] ){
				
				$toSend = json_encode(array(
		            "fullName" =>   isset($data['name']) ? $data['name'] : "",
		            "phone" =>      isset($data['phone']) ? $data['phone'] : "",
		            "type"=>        isset($_POST['page']) ? $_POST['page']: "",
		            "email"=>       isset($data['mail']) ? $data['mail']: "",
		            "office"=>      isset($data['city']) ? ($data['city']): "",
		            "description"=> isset($data['question']) ? ($data['question']): "",
		            "roistat"=>     isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : "",
		            "utm_source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "", // UTM-метка «Рекламная система»
		            "utm_medium" => isset($_COOKIE['medium']) ? $_COOKIE['medium'] : "" ,// UTM-метка «Тип трафика»
		            "utm_campaign"=>isset($_COOKIE['campaign']) ? $_COOKIE['campaign'] : "", // UTM-метка «Обозначение рекламной кампании»
		            "utm_term"=>    isset($_COOKIE['term']) ? $_COOKIE['term'] : "",// UTM-метка «Условие поиска кампании»
		            "utm_content"=> isset($_COOKIE['content']) ? $_COOKIE['content'] : "", // UTM-метка «Содержание кампании»
		        ));

		        $ch = curl_init("https://gscastana.t8s.ru/Api/V2/AddStudyRequest");
		        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		        if(isset($data['url'])){
		                curl_setopt($ch, CURLOPT_REFERER, strip_tags($data['url']));
		            }
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $toSend);
		        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,5);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		        $result = curl_exec($ch);
		        curl_close($ch);
				

				$email = new CakeEmail('smtp');
				$send_email = 'info@gscenter.kz';
				if($data['city'] == 'Нур-Султан'){
					$send_email = 'kamilya@gscenter.kz';
					// $send_email = ''venera.bai@gscenter.kz;
				}
				if($data['city'] == 'Алматы'){
					$send_email = 'kamilya@gscenter.kz';
				}
				if($data['city'] == 'Актау'){
					$send_email = 'kamilya@gscenter.kz';
				}
				if($data['city'] == 'Караганда'){
					$send_email = 'alibek@gscstudy.kz';
				}
				if($data['city'] == 'Павлодар'){
					$send_email = 'kamilya@gscenter.kz';
				}			
				$email->from(array('no-reply@gscstudy.kz' => 'gscstudy.kz'))
				->to($send_email)
				// ->to('')
				->subject('Новые письмо с сайта');
				
				$message = 'Страница: ' . $data['page'] . ', Имя: ' . $data['name'] . ', Телефон: ' . $data['phone'] . ', E-mail: ' . $data['mail'];
				
				
				if( $email->send($message) ){
				// if( $this->Request->save($data) ){
					$this->Session->setFlash('Заявка успешно отправлена, в ближайшее время с Вами свяжется наш менеджер. Спасибо!', 'default', array(), 'good');
					return $this->redirect($this->referer());
				}else{
					$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
					return $this->redirect($this->referer());
				}
			}else{
				$this->Session->setFlash('Проверочный код введен неверно', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}



	public function admin_delete($id){
		if (!$this->Request->exists($id)) {
			throw new NotFounddException('Такой заявки нет');
		}
		if($this->Request->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function test(){
		// $te = 'info@astanacreative.kz';
		if(!empty($this->request->data)){
			$data = $this->request->data;

			if( isset($data['g-recaptcha-response']) && $data['g-recaptcha-response'] ){
				// $this->Request->create();
				// $r1 = $data['r1'];
				// $r2 = $data['r2'];
				// $r_sum = $r1 + $r2;
				// if(isset($data['robot']) && $data['robot'] == $r_sum){

					$description = "Тест: ".strip_tags($data['senddata']).'  .'.'Откуда вы узнали о нас: '.$data['question_about'].'. В какое время вам удобно заниматься: '.$data['question_time'];
					
					if($data['city'] != 'Алматы'){
						$birthday = date("YYYY-MM-DD", strtotime($data['date']));
						// $description = "Тест: ".strip_tags($data['senddata']).'  .'.'Откуда вы узнали о нас: '.$data['question_about'].'. В какое время вам удобно заниматься: '.$data['question_time'];
						$toSend = json_encode(array(
							"fullName" =>   isset($data['name']) ? $data['name'] : "",
							"phone" =>      isset($data['phone']) ? $data['phone'] : "",
							"type"=>        isset($_POST['page']) ? $_POST['page']: "",
							"email"=>       isset($data['mail']) ? $data['mail']: "",
							"office"=>      isset($data['city']) ? ($data['city']): "",
							"birthday"=>    isset($data['date']) ? ($data['date']): "",
							 "description"=> isset($description) ? ($description): "",
							"roistat"=>     isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : "",
							"utm_source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "", // UTM-метка «Рекламная система»
							"utm_medium" => isset($_COOKIE['medium']) ? $_COOKIE['medium'] : "" ,// UTM-метка «Тип трафика»
							"utm_campaign"=>isset($_COOKIE['campaign']) ? $_COOKIE['campaign'] : "", // UTM-метка «Обозначение рекламной кампании»
							"utm_term"=>    isset($_COOKIE['term']) ? $_COOKIE['term'] : "",// UTM-метка «Условие поиска кампании»
							"utm_content"=> isset($_COOKIE['content']) ? $_COOKIE['content'] : "", // UTM-метка «Содержание кампании»
		        		));

						$ch = curl_init("https://gscastana.t8s.ru/Api/V2/AddStudyRequest");
						curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
						if(isset($data['url'])){
								curl_setopt($ch, CURLOPT_REFERER, strip_tags($data['url']));
							}
						curl_setopt($ch, CURLOPT_POSTFIELDS, $toSend);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,5);
						curl_setopt($ch, CURLOPT_TIMEOUT, 5);
						$result = curl_exec($ch);
						curl_close($ch);
					}
					
					
					$email = new CakeEmail('smtp');
					// debug($data);die;
					$send_email = 'info@gscenter.kz';
					if($data['city'] == 'Нур-Султан' || $data['city'] == 'Астана'){
						$send_email = 'alibek@gscstudy.kz'; 
						
						// $send_email = 'venera.bai@gscenter.kz';
					}
					if($data['city'] == 'Алматы'){
						// $send_email = 'dilshat@gsc.kz';
						$send_email = 'alibek@gscstudy.kz';
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, "https://gscstudy.s20.online/api/1/lead/create?token=c4ca4238a0b923820dcc509a6f75849b");
							curl_setopt($ch, CURLOPT_POST, true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
								"name" =>   isset($data['name']) ? $data['name'] : "",
								"phone" =>      isset($data['phone']) ? $data['phone'] : "",
								"email"=>       isset($data['mail']) ? $data['mail']: "",
								"office"=>      isset($data['city']) ? ($data['city']): "",
								"birthday"=>    isset($data['date']) ? ($data['date']): "",
								"note"=>       isset($description) ? ($description): "",
								"source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "",
							]));
							
							$result = curl_exec($ch);
							curl_close($ch);
					}
					if($data['city'] == 'Актау'){
						// $send_email = 'dilshat@gsc.kz';
						$send_email = 'alibek@gscstudy.kz';
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, "https://gscstudy.s20.online/api/1/lead/create?token=c4ca4238a0b923820dcc509a6f75849b");
							curl_setopt($ch, CURLOPT_POST, true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
								"name" =>   isset($data['name']) ? $data['name'] : "",
								"phone" =>      isset($data['phone']) ? $data['phone'] : "",
								"email"=>       isset($data['mail']) ? $data['mail']: "",
								"office"=>      isset($data['city']) ? ($data['city']): "",
								"birthday"=>    isset($data['date']) ? ($data['date']): "",
								"note"=>       isset($description) ? ($description): "",
								"source" => isset($_COOKIE['source']) ? $_COOKIE['source'] : "",
							]));
							
							$result = curl_exec($ch);
							curl_close($ch);
					}
					if($data['city'] == 'Караганда'){
						$send_email = 'alibek@gscstudy.kz';
					}
					if($data['city'] == 'Павлодар'){
						$send_email = 'alibek@gscstudy.kz';
					}
					if($data['city'] == 'Другой город'){
						$send_email = 'alibek@gscstudy.kz';
					}
					$email = new CakeEmail('smtp');
					$email->from(array('no-reply@gscstudy.kz' => 'no-reply@gscstudy.kz'))
					->to($send_email)
					// ->to($send_email)
					->subject('Новые письмо с сайта');
					$message = '<strong>Тест: </strong> '. $data['senddata'] . '<p><b>Имя:</b> ' . $data['name'] . '</p><p><b>Почта:</b> ' . $data['email'] . '</p><p><b>Телефон:</b> ' . $data['phone'] . '</p><b>Город:</b> ' . $data['city'] . '</p><p><b>Дата рождения:</b> ' . $data['date'] . '</p><p><b>Откуда вы узнали о нас</b> ' . $data['question_about']. '</p><p><b>В какое время вам удобно заниматься</b> ' . $data['question_time'];
					$email->viewVars(array('content' => $message));
					$email->template('welcome','default');
					$email->emailFormat('html');

					if( $email->send($message) ){
						$this->Session->setFlash('Заявка успешно отправлена, в ближайшее время с Вами свяжется наш менеджер. Спасибо!', 'default', array(), 'good');
						// debug($data);
						// debug(12345);die;
						return $this->redirect($this->referer());
					}else{
						$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
						return $this->redirect($this->referer());
					}
				// }else{
				// 	$this->Session->setFlash('Проверочный код введен неверно', 'default', array(), 'bad');
				// 	return $this->redirect($this->referer());
				// }
			} else{
				$this->Session->setFlash('Поставьте галочку что вы не робот', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
			
		}
	}
}