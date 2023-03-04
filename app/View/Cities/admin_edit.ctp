<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 
	echo $this->Form->create('City', array('type' => 'file'));
	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
	echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
	echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
	echo $this->Form->input('description', array('label' => 'Описание:'));
	
	if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
		echo $this->Form->input('priority', array('label' => 'Приоритет:'));
		echo $this->Form->input('active', array('label' => 'Опубликован:'));
		echo $this->Form->input('id');
	}

	echo $this->Form->end('Редактировать');
 ?>
</div>


<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>