<h1>Добавление материала</h1>

 <?php 

echo $this->Form->create('LanguageCard');

echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

echo $this->Form->input('language_program_id', array('type' => 'hidden', 'value' => 1));

echo $this->Form->end('Добавить');

 ?>

<script>
    CKEDITOR.replace( 'editor' );
</script>