<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление материала</h2>
	</div>
<?php 
echo $this->Form->create('SecondaryEducation', array('type' => 'file'));
echo $this->Form->input('city_id', array('label' => 'Город:'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение: ', 'type' => 'file'));
echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
echo $this->Form->input('h1', array('label' => 'H1:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));
echo $this->Form->end('Создать');
?>
</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>