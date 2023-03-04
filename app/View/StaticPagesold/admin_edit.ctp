<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 

echo $this->Form->create('StaticPage', array('type' => 'file')); ?>
<?php if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'):?>
<div class="input select">
<label for="PageParentId">Родительская страница:</label>
	<select name="data[StaticPage][parent_id]" id="PageParentId" style="width:100%;">
		<option value="0">Выберите страницу</option>
		<?php foreach($list as $key => $value): ?>
			<option value="<?=$key?>" <?= ($data['StaticPage']['parent_id'] == $key)? 'selected' : '' ?>><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?php endif ?>
<?php
// echo $this->Form->input('position', array('label' => 'Приоритет страницы:'));
if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
	echo $this->Form->input('alias', array('label' => 'Alias:'));
	// echo $this->Form->input('img', array('label' => 'Изображение :', 'type' => 'file'));
	// echo $this->Form->input('show_in_parent', array('label' => 'Показать в родительской странице:', 'type' => 'checkbox'));
	// echo $this->Form->input('hide_on_map', array('label' => 'Не показывать на карте сайта:', 'type' => 'checkbox'));
	// echo $this->Form->input('show_comments', array('label' => 'Включить комментарии:', 'type' => 'checkbox'));
	// echo $this->Form->input('more', array('label' => 'Меню:', 'type' => 'checkbox'));
}
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('tags', array('label' => 'Теги:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));

?>
<div class="edit_bot">
	
	<div class="bot_r">
	<?
	
	echo $this->Form->end('Редактировать');
	?>
	</div>
	<script type="text/javascript">
		 //CKEDITOR.replace( 'editor' );
	</script>
</div>
<?php if(isset($data['StaticPage']['alias']) && !empty($data['StaticPage']['alias'])): ?>
<a href="/<?=$this->request->query['lang']?>/static_page/<?=$data['StaticPage']['alias']?>">Посмотреть страницу</a> | 
<?php if($this->request->query['lang'] == 'kz'): ?>
	<a href="/admin/static_pages/edit/<?=$data['StaticPage']['id']?>?lang=ru">Редактировать рус</a>
<?php else: ?>
	<a href="/admin/static_pages/edit/<?=$data['StaticPage']['id']?>?lang=kz">Редактировать каз</a>
<?php endif ?>
<?php endif ?>
</div>