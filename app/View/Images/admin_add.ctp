<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление изображения</h2>
	</div>
<?php 
echo $this->Form->create('Image', array('type' => 'file'));
?>
<div class="input select">
<label for="ImageDevelopmentId">Список:</label>
	<select required name="data[Image][development_id]" id="ImageDevelopmentId">
		<option value="">Выберите элемент</option>
		<?php foreach($developments as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>