<div class="content-up">
	<span class="content-up__heading">Добавление материала</span>
</div>
<div class="add-part">

<?php 
if(isset($_GET['nur'])){
			var_dump($cities);
		}
echo $this->Form->create('Slide', array('type' => 'file'));
echo $this->Form->input('city_id', array('label' => 'Город:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
// echo $this->Form->input('doc', array('label' => 'Прайс лист:', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
// echo $this->Form->input('link', array('label' => 'Ссылка:', 'type' => 'text'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('link', array('label' => 'Ссылка:'));
echo $this->Form->input('priority', array('label' => 'Приоритет:'));
// echo $this->Form->input('active', array('label' => 'Опубликовано:'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 //CKEDITOR.replace( 'editor' );
</script>
</div>