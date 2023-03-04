<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление материала</h2>
	</div>
<?php 
echo $this->Form->create('Doc', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
// echo $this->Form->input('body', array('label' => 'Текст:'));
echo $this->Form->input('doc', array('label' => 'Документ: ', 'type' => 'file'));
// echo $this->Form->input('doc_en', array('label' => 'Документ EN:', 'type' => 'file'));
// echo $this->Form->input('doc_kz', array('label' => 'Документ KZ:', 'type' => 'file'));

echo $this->Form->end('Создать');
?>
</div>
<!-- <a href="/admin/products/edit/<?=$id?>">Назад в продукцию</a> -->