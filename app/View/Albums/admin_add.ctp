<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Album', array('type' => 'file'));
echo $this->Form->input('img.', array('label' => 'Изображение:', 'type' => 'file', 'multiple'=>'multiple'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->end('Создать');
?>
</div>