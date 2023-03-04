
<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 

echo $this->Form->create('Partner', array('type' => 'file'));

?>
<div class="edit_bot">

	<div class="bot_r">

		<div class="input select">
		<label for="PartnerType">Тип:</label>
			<select required name="data[Partner][type]" id="PartnerType" required>
				<option value="" disabled>Выберите тип</option>
				<?php foreach($list as $key => $value): ?>
					<option value="<?=$key?>" <?= ($data['Partner']['type'] == $key)? 'selected' : '' ?>><?=$value?></option>
				<?php endforeach ?>
			</select>
		</div>

	<?
	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('link', array('label' => 'Ссылка:'));
	echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div>