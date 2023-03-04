<h1>Редактирование Языка обучения</h1>

<?php 
	echo $this->Form->create('EduLanguage');

	if( $_GET['lang'] == 'ru' ){
		echo $this->Form->input('priority', array('label' => 'Приоритет'));
	}
	echo $this->Form->input('title', array('label' => 'Название', 'required'));

	echo $this->Form->end('Редактировать');
?>