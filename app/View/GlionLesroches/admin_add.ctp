<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление учебного заведения</h2>
	</div>
	<?php 
		echo $this->Form->create('GlionLesroche', array('type' => 'file'));

		echo $this->Form->input('title', array('label' => 'Название:'));

		echo $this->Form->input('type', array('label' => 'Тип учреждения', 'options' => $types));
		echo $this->Form->input('item_order', array('label' => 'Приоритет:'));
		echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

		echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
		echo $this->Form->input('requirements', array('label' => 'Требования к поступлению', 'id' => 'editor4'));
		echo $this->Form->input('residence', array('label' => 'Проживание', 'id' => 'editor2'));
		echo $this->Form->input('equipments', array('label' => 'Оснащение', 'id' => 'editor3'));
		echo $this->Form->input('video_link', array('label' => 'Youtube ID:'));
		
		echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
		echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
		echo $this->Form->input('description', array('label' => 'Описание:'));
	?>

	<?php
		echo $this->Form->end('Создать');
	?>
</div>

<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
	 CKEDITOR.replace( 'editor2' );
	 CKEDITOR.replace( 'editor3' );
	 CKEDITOR.replace( 'editor4' );
</script>