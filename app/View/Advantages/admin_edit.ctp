<span class="admin-heading">Преимущества</span>
<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">
<?php
echo $this->Form->create('Advantage', array('type' => 'file'));
// echo $this->Form->input('title', array('label' => 'Название:'));
// echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
// echo $this->Form->input('body2', array('label' => 'Текст 2:', 'id' => 'editor2'));
// echo $this->Form->input('body3', array('label' => 'Текст 3:', 'id' => 'editor3'));
// echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
// echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
// echo $this->Form->input('description', array('label' => 'Описание:'));
echo $this->Form->input('active', array('label' => 'Опубликовано:', 'type' => 'checkbox'));
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
<script type="text/javascript">
	 // CKEDITOR.replace( 'editor' );
	 // CKEDITOR.replace( 'editor2' );
	 // CKEDITOR.replace( 'editor3' );
</script>
</div>
<a href="/admin/universities/edit/<?=$data['Advantage']['university_id']?>">Назад</a>