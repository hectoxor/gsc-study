
<h1>Редактирование материала</h1>

<?php 
	echo $this->Form->create('ProgramCompany', array('type' => 'file'));

	echo $this->Form->input('item_order', array('label' => 'Приоритет'));
	echo $this->Form->input('title', array('label' => 'Название компании'));
	echo $this->Form->input('link', array('label' => 'Ссылка'));

	echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
	if( !empty($data) && $data['ProgramCompany']['img'] ){
		echo '<p>' . $this->Html->image('program_companies/thumbs/' . $data['ProgramCompany']['img']) . '</p><br>';
	}

	echo $this->Form->end('Редактировать');
?>

