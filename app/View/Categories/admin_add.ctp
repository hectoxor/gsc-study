<div class="title admin_t">
	<h2>Добавление материала</h2>
</div>
<?php 

echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
?>
<div class="input select">
<label for="CategoryParentId">Родительская категория:</label>
	<select name="data[Category][parent_id]" id="CategoryParentId">
		<option value="0">Выберите категорию</option>
		<?php foreach($cat_t as $item): ?>
			<option value="<?=$item['Category']['id']?>"><?=$item['Category']['title']?></option>
			<?php if(!empty($item['children'])): ?>
				<?php foreach($item['children'] as $child): ?>
				<option value="<?=$child['Category']['id']?>">&nbsp;&nbsp;- <?=$child['Category']['title']?></option>
				<?php endforeach ?>
			<?php endif ?>
		<?php endforeach ?>
	</select>
</div>
<?php
// echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file'));
// echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
// echo $this->Form->input('keywords', array('label' => 'Ключевые слова(для поисковиков):', 'class' => ''));
// echo $this->Form->input('description', array('label' => 'Описание(для поисковиков):', 'class' => ''));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 //CKEDITOR.replace( 'editor' );
</script>