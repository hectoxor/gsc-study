<h1>Редактирование Фото</h1>

<?php 
	echo $this->Form->create('Photo', array('type' => 'file') );

	echo $this->Form->input('img', array('label' => 'Фото', 'type' => 'file'));
	if( $data['Photo']['img'] ){
		echo '<p>' . $this->Html->image('photos/thumbs/' . $data['Photo']['img']) . '</p>';
	}

	echo $this->Form->end('Редактировать');
 ?>