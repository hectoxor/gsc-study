<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Sertificate', array('type' => 'file'));
?>
<div class="edit_bot">

	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	//echo $this->Form->input('link', array('label' => 'Ссылка:'));
	
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>

</div>