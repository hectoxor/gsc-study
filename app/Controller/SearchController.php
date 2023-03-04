<?php 

class SearchController extends AppController{
	public $uses = array('Page', 'Service', 'Project', 'Product');

	public function index(){
		if(isset($this->request->query['q']) && !empty($this->request->query['q'])){
			$q = $this->request->query['q'];
			$res_services = $this->Service->query('SELECT * FROM services WHERE title  LIKE "%'.$q.'%" OR body LIKE "%'.$q.'%"');
			$res_projects = $this->Project->query('SELECT * FROM projects WHERE title  LIKE "%'.$q.'%" OR body LIKE "%'.$q.'%"');
			$res_products = $this->Project->query('SELECT * FROM products WHERE title  LIKE "%'.$q.'%" OR body LIKE "%'.$q.'%"');
			//$res = $this->Page->query('SELECT * FROM i18n WHERE i18n.field="title" OR i18n.content LIKE "%'.$q.'%"');
			// $res = $this->_unique($res);
			$title_for_layout = 'Поиск';
			$bc = array(array('link' => '', 'title' => $title_for_layout));
			$nr = array();
			$count = count($res_services);
			$count = $count + count($res_projects) + count($res_products);

			// debug($res_projects);die;
			// die;
			// $res = array_unique($res);
			// debug($q);
			// foreach($res as $item){
			// 	if($item['i18n']['model'] == 'Page'){
			// 		// debug(1);
			// 		$nr[] = $item['i18n'];
			// 		// $nr[]['foreign_key'] = 1;
			// 		// $nr[] = $item['i18n']['model'];
			// 		// $item['i18n']['foreign_key'] = true;
			// 		// debug($item['i18n']['foreign_key']);
			// 		// die;
			// 	}
			// }
			
			// $pages = $this->Page->find('all');
			// $news = $this->News->find('all');
			// $p_count = count($pages);
			// $n_count = count($news);
			// $res_count = count($res);
			//for($i = 0; $i <= $res_count-1; $i++){
				// if($res[$i]['i18n']['model'] == 'Page'){
				// 	// debug($res);die;
				// 	for($p = 0; $p <= $p_count; $p++){
				// 		// debug($p);
				// 		// debug($pages);die;
				// 		if($pages[$p]['Page']['id'] == $res[$i]['i18n']['foreign_key']){
				// 			$res[$i]['i18n']['foreign_key'] = $pages[$p]['Page']['alias'];
				// 			break;
				// 		}
				// 	}

				// }

				// if($res[$i]['i18n']['model'] == 'News'){
				// 	for($s = 0; $s <= $n_count; $s++){
				// 		if($news[$s]['News']['id'] == $res[$i]['i18n']['foreign_key']){
				// 			$res[$i]['i18n']['foreign_key'] = $news[$s]['News']['alias'];
				// 			break;
				// 		}
				// 	}

				// }

				

			//}
			// debug($res);
			// die;

		}else{
			$res = __('Введите запрос...');
		}
		$title_for_layout = __('Поиск');
		$this->set(compact('res', 'title_for_layout', 'q', 'res_projects', 'res_services', 'res_products', 'count', 'bc'));
	}

	protected function _unique($array){
		if(is_array($array)){
			foreach ($array as $item) {
				$list[] = $item['i18n']['foreign_key'].$item['i18n']['model'];
			}
			return $list;
		}else{
			return 'Ошибка';
		}
	}
}