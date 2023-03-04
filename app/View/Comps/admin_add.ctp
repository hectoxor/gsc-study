<span class="admin-heading">Элементы сайта</span>
<div class="content-up">
	<span class="content-up__heading">Добавление элемента</span>
</div>
<div class="add-part">
<?php 

echo $this->Form->create('Comp', array('type' => 'file'));
echo $this->Form->input('body', array('label' => 'Текст:'));
echo $this->Form->input('comments', array('label' => 'Комментарий:'));
echo $this->Form->input('alias', array('label' => 'Alias (на английском):'));
echo $this->Form->end('Создать');
?>

</div>