
<h1>Добавление материала</h1>

<?php 
	echo $this->Form->create('ProgramCompany', array('type' => 'file'));

	echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
	echo $this->Form->input('title', array('label' => 'Название компании'));

	echo $this->Form->input('link', array('label' => 'Ссылка'));
	echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file', 'required'));

	echo $this->Form->input('language_program_id', array('type' => 'hidden', 'value' => 1));

	echo $this->Form->end('Добавить');
?>

