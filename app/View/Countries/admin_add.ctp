<div class="title admin_t">
	<h2>Добавление материала</h2>
</div>

<?php 

echo $this->Form->create('Country', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('alias', array('label' => 'Alias (Название на английском)', 'class' => ''));
echo $this->Form->input('h1', array('label' => 'H1'));

// echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:', 'class' => ''));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова(для поисковиков):', 'class' => ''));
echo $this->Form->input('description', array('label' => 'Описание(для поисковиков):', 'class' => ''));
echo $this->Form->input('magistratura', array('label' => 'Языковые курсы:'));
echo $this->Form->input('mba', array('label' => 'Среднее образоване:'));
echo $this->Form->input('vuz', array('label' => 'Высшее образование:'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 // CKEDITOR.replace( 'editor' );
</script>