<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('StaticPage', array('type' => 'file'));?>
<div class="input select">
<label for="StaticPageParentId">Родительская страница:</label>
	<select name="data[Page][parent_id]" id="StaticPageParentId" style="width:100%;">
		<option value="0">Выберите страницу</option>
		<?php foreach($list as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
// echo $this->Form->input('position', array('label' => 'Приоритет страницы:'));

echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file', 'required' => false));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('tags', array('label' => 'Теги:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));
// echo $this->Form->input('more', array('label' => 'Меню:', 'type' => 'checkbox'));
// echo $this->Form->input('show_in_parent', array('label' => 'Показать в родительской странице:', 'type' => 'checkbox'));
// echo $this->Form->input('hide_on_map', array('label' => 'Не показывать на карте сайта:', 'type' => 'checkbox'));
// echo $this->Form->input('show_comments', array('label' => 'Включить комментарии:', 'type' => 'checkbox'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>