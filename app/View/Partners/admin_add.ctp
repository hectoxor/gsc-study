<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Partner', array('type' => 'file'));?>
<div class="input select">
<label for="PartnerType">Тип:</label>
	<select name="data[Partner][type]" id="PartnerType" required>
		<option value="" disabled>Выберите тип</option>
		<?php foreach($list as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('link', array('label' => 'Ссылка:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
// echo $this->Form->input('priority', array('label' => 'Приоритет:'));
echo $this->Form->end('Создать');
?>
</div>