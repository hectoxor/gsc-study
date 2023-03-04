<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php
echo $this->Form->create('Doc', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
// echo $this->Form->input('body', array('label' => 'Текст:'));
echo $this->Form->input('doc', array('label' => 'Документ: ', 'type' => 'file'));
// echo $this->Form->input('doc_en', array('label' => 'Документ EN:', 'type' => 'file'));
// echo $this->Form->input('doc_kz', array('label' => 'Документ KZ:', 'type' => 'file'));
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