<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление материала</h2>
	</div>
<?php 

echo $this->Form->create('Sertificate', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
//echo $this->Form->input('link', array('label' => 'Ссылка:', 'id' => 'editor'));
echo $this->Form->end('Создать');
?>

</div>