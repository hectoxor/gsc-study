<?php 

class TestsController extends AppController{

	public function general(){
		$title_for_layout = "Онлайн тест General";
		$this->set(compact('title_for_layout'));
	}

	public function teen(){
		$title_for_layout = "Онлайн тест Teen";
		$this->set(compact('title_for_layout'));
	}

	public function teen_2(){
		$title_for_layout = "Онлайн тест Teen 2";
		$this->set(compact('title_for_layout'));
	}

	public function ielts(){
		$title_for_layout = "Онлайн тест IELTS";
		$this->set(compact('title_for_layout'));
	}

	public function kids(){
		$title_for_layout = "Онлайн тест Kids";
		$this->set(compact('title_for_layout'));
	}
}

 ?>