
<h1>Добавление материала</h1>

<?php 
	echo $this->Form->create('Team', array('type' => 'file'));

	echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
	echo $this->Form->input('title', array('label' => 'ФИО'));
	echo $this->Form->input('short_position', array('label' => 'Краткая должность'));
	echo $this->Form->input('position', array('label' => 'Должность'));
	echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));
	echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

	echo $this->Form->input('language_school_id', array('type' => 'hidden', 'value' => 1));

	echo $this->Form->end('Добавить');
?>

<script>
    CKEDITOR.replace( 'editor' );
</script>