<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование изображения</h2>
	</div>
<?php
echo $this->Form->create('Picture', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
echo $this->Form->input('priority', array('label' => 'Приоритет:'));
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