
<h1>Редактирование материала</h1>

<?php 
	echo $this->Form->create('Team', array('type' => 'file'));

	if( $_GET['lang'] == 'ru' ){
		echo $this->Form->input('item_order', array('label' => 'Порядок'));
	}

	echo $this->Form->input('title', array('label' => 'ФИО'));
	echo $this->Form->input('short_position', array('label' => 'Краткая должность'));
	echo $this->Form->input('position', array('label' => 'Должность'));
	echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

	if( $_GET['lang'] == 'ru' ){
		echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
		if( !empty($data) && $data['Team']['img'] ){
			echo '<p>' . $this->Html->image('teams/thumbs/' . $data['Team']['img']) . '</p><br>';
		}
	}

	echo $this->Form->end('Редактировать');
?>

<script>
    CKEDITOR.replace( 'editor' );
</script>
