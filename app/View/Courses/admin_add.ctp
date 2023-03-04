<span class="admin-heading">Летние курсы за рубежом</span>
<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Course', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('h1', array('label' => 'H1:'));

echo $this->Form->input('short_body', array('label' => 'Краткое описание:', 'id' => 'editor_short_body'));
echo $this->Form->input('cost_includes', array('label' => 'Стоимость включает в себя:', 'id' => 'editor_cost_incl'));
echo $this->Form->input('cost_not_includes', array('label' => 'Не включено в стоимость:', 'id' => 'editor_cost_not_incl'));

echo $this->Form->input('body', array('label' => 'Программа обучения:', 'id' => 'editor'));

echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
	 CKEDITOR.replace( 'editor_short_body' );
	 CKEDITOR.replace( 'editor_cost_incl' );
	 CKEDITOR.replace( 'editor_cost_not_incl' );
</script>
</div>