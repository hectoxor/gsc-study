<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">

	<?php $types = array('filial' => 'Филиал', 'education' => 'Образование за рубежом', 'school' => 'Языковая школа'); ?>

	<?php
		echo $this->Form->create('Contact', array('type' => 'file'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('city_id', array('label' => 'Город:'));

			echo $this->Form->input('type', array('label' => 'Тип:', 'options' => $types));

			echo $this->Form->input('priority', array('label' => 'Приоритет:'));
		}

		echo $this->Form->input('title', array('label' => 'Название:'));
		echo $this->Form->input('address', array('label' => 'Адрес:'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('phone1', array('label' => 'Телефон 1'));
			echo $this->Form->input('phone2', array('label' => 'Телефон 2'));
			echo $this->Form->input('email', array('label' => 'E-mail:'));
			echo $this->Form->input('map', array('label' => 'Карта:'));
			echo $this->Form->input('active', array('label' => 'Опубликовано:'));
		}

	?>
	<div class="edit_bot">
		<div class="bot_r">
			<?
				echo $this->Form->input('id');
				echo $this->Form->end('Редактировать');
			?>
		</div>
	</div>
</div>