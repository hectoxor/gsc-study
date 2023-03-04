<h1>Добавление Преимущества</h1>

 <?php 

echo $this->Form->create('Advan', array('type' => 'file'));

echo $this->Form->input('item_order', array('label' => 'Порядок', 'value' => 0));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

echo $this->Form->input('page', array('type' => 'hidden', 'value' => 'home'));

echo $this->Form->end('Добавить');

 ?>

<!--  <script>
    CKEDITOR.replace( 'editor' );
</script> -->