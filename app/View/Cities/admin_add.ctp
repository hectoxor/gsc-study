<div class="content-up">
	<span class="content-up__heading">Добавление города</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('City', array('type' => 'file'));
// echo $this->Form->input('photos.', array('label' => 'Изображение:', 'type' => 'file', 'multiple'=>'multiple'));
// echo $this->Form->input('category_project_id', array('label' => 'Категория', 'options' => $cats));
// echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
// echo $this->Form->input('youtube', array('label' => 'Youtube ID:'));
echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));
echo $this->Form->end('Создать');
?>

</div>

<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>