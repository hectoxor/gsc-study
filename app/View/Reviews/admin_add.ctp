<div class="content-up">
	<span class="content-up__heading">Добавление отзыва</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('Review', array('type' => 'file'));
echo $this->Form->input('city_id', array('label' => 'Город:'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('body', array('label' => 'Текст:'));
echo $this->Form->end('Создать');
?>
</div>