<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php
	echo $this->Form->create('SecondaryEducation', array('type' => 'file'));

	if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
		echo $this->Form->input('city_id', array('label' => 'Город:'));
	}

	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
	
	if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
		echo $this->Form->input('img', array('label' => 'Изображение: ', 'type' => 'file'));
	}
	
	echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
	echo $this->Form->input('h1', array('label' => 'H1:'));
	echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
	echo $this->Form->input('description', array('label' => 'Описание:'));
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
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>