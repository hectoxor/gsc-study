<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">
<?php 
	echo $this->Form->create('StaticPage', array('type' => 'file'));

	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('h1', array('label' => 'H1 заголовок:'));
	
	if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
		echo $this->Form->input('alias', array('label' => 'Алиас:'));
	}

	echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
	echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
	echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
	echo $this->Form->input('description', array('label' => 'Описание:'));
	// echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

	echo $this->Form->end('Редактировать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>