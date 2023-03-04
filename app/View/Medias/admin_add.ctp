<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Media', array('type' => 'file'));?>
<div class="input select">
<label for="MediaCourseId">Курс:</label>
	<select name="data[Media][course_id]" id="MediaCourseId">
		<option value="0">Выберите курс</option>
		<?php foreach($list as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->input('youtube', array('label' => 'Yotube ID:'));
echo $this->Form->input('priority', array('label' => 'Приоритет:'));
echo $this->Form->end('Создать');
?>
</div>