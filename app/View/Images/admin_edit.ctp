<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование изображения</h2>
	</div>
<?php
echo $this->Form->create('Image', array('type' => 'file'));?>
<div class="input select">
<label for="ImageDevelopmentId">Список:</label>
	<select required name="data[Image][development_id]" id="ImageDevelopmentId">
		<option value="">Выберите элемент</option>
		<?php foreach($developments as $key => $value): ?>
			<option value="<?=$key?>" <?= ($data['Image']['development_id'] == $key)? 'selected' : '' ?>><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
?>
<div class="edit_bot">
	<div class="bot_r">
	<?
	echo $this->Form->input('id');
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div>