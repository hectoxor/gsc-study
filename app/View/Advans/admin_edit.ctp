<h1>Редактирование Преимущества</h1>

<?php 

echo $this->Form->create('Advan', array('type' => 'file'));

if( $_GET['lang'] == 'ru' ){
	echo $this->Form->input('item_order', array('label' => 'Порядок'));
}

echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

echo $this->Form->end('Редактировать');
?>

<!--  <script>
    CKEDITOR.replace( 'editor' );
</script> -->