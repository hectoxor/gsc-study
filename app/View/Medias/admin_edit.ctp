
<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 

echo $this->Form->create('Media', array('type' => 'file'));

?>
<div class="edit_bot">

	<div class="bot_r">

		<div class="input select">
		<label for="MediaCourseId">Курс:</label>
			<select required name="data[Media][course_id]" id="MediaCourseId">
				<option value="">Выберите курс</option>
				<?php foreach($list as $key => $value): ?>
					<option value="<?=$key?>" <?= ($data['Media']['course_id'] == $key)? 'selected' : '' ?>><?=$value?></option>
				<?php endforeach ?>
			</select>
		</div>

	<?
	echo $this->Form->input('youtube', array('label' => 'Yotube ID:'));
	echo $this->Form->input('priority', array('label' => 'Приоритет:'));
	// echo $this->Form->input('active', array('label' => 'Опубликовано:', 'type' => 'checkbox'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div>