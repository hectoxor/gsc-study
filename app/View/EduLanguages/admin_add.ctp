<h1>Добавление Языка обучения</h1>

 <?php 
	echo $this->Form->create('EduLanguage');

	echo $this->Form->input('priority', array('label' => 'Приоритет', 'value' => 0));
	echo $this->Form->input('title', array('label' => 'Название языка', 'required'));

	echo $this->Form->end('Добавить');
?>