
<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование видео</h2>
	</div>
<?php 

echo $this->Form->create('Video', array('type' => 'file'));
?>
<div class="edit_bot">

	<div class="bot_r">
	<?
	echo $this->Form->input('youtube', array('label' => 'Yotube ID:'));
	echo $this->Form->input('priority', array('label' => 'Приоритет:'));
	echo $this->Form->input('active', array('label' => 'Опубликовано:', 'type' => 'checkbox'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div>