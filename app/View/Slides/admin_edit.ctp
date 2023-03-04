
<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование слайда</h2>
	</div>
<?php 

echo $this->Form->create('Slide', array('type' => 'file'));
?>
<div class="edit_bot">

	<div class="bot_r">
	<?
	echo $this->Form->input('city_id', array('label' => 'Город:'));
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	// echo $this->Form->input('doc', array('label' => 'Прайс лист:', 'type' => 'file'));
	echo $this->Form->input('title', array('label' => 'Название:'));
	// echo $this->Form->input('body', array('label' => 'Описание:'));
// echo $this->Form->input('link', array('label' => 'Ссылка:', 'type' => 'text'));
	echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
	echo $this->Form->input('link', array('label' => 'Ссылка:'));
	echo $this->Form->input('priority', array('label' => 'Приоритет:'));
	echo $this->Form->input('active', array('label' => 'Опубликовано:'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div>
<script type="text/javascript">
	 //CKEDITOR.replace( 'editor' );
</script>