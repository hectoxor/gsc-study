<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление материала</h2>
	</div>
	
	<?php $types = array('filial' => 'Филиал', 'education' => 'Образование за рубежом', 'school' => 'Языковая школа'); ?>

	<?php 
		echo $this->Form->create('Contact', array('type' => 'file'));
		echo $this->Form->input('city_id', array('label' => 'Город:'));

		echo $this->Form->input('type', array('label' => 'Тип:', 'options' => $types));
		
		echo $this->Form->input('title', array('label' => 'Название:'));
		echo $this->Form->input('address', array('label' => 'Адрес:'));
		echo $this->Form->input('phone1', array('label' => 'Телефон 1'));
		echo $this->Form->input('phone2', array('label' => 'Телефон 2'));
		echo $this->Form->input('email', array('label' => 'E-mail:'));
		echo $this->Form->input('map', array('label' => 'Карта:'));
		echo $this->Form->input('priority', array('label' => 'Приоритет:'));
		echo $this->Form->end('Создать');
	?>
</div>