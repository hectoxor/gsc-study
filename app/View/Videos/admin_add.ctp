<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Video', array('type' => 'file'));
echo $this->Form->input('youtube', array('label' => 'Yotube ID:'));
echo $this->Form->input('priority', array('label' => 'Приоритет:'));
echo $this->Form->end('Создать');
?>
</div>