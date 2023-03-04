<div class="title admin_t">Редактирование материала</div>

<div class="model_info">
<?php 
echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => ''));
?>
<div class="input select">
<label for="CategoryParentId">Родительская категория:</label>
	<select name="data[Category][parent_id]" id="CategoryParentId">
		<option value="0">Выберите категорию</option>
		<?php foreach($cat_t as $item): ?>
			<option value="<?=$item['Category']['id']?>" <?= ($data['Category']['parent_id'] == $item['Category']['id'])? 'selected' : '' ?>><?=$item['Category']['title']?></option>
			<?php if(!empty($item['children'])): ?>
				<?php foreach($item['children'] as $child): ?>
				<option value="<?=$child['Category']['id']?>">&nbsp;&nbsp;- <?=$child['Category']['title']?></option>
				<?php endforeach ?>
			<?php endif ?>
		<?php endforeach ?>
	</select>
</div>

<?php
echo $this->Form->end('Редактировать');
?>
<script type="text/javascript">
	// CKEDITOR.replace( 'editor' );
</script>
</div>