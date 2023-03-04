<div class="title admin_t">Редактирование материала</div>

<div class="model_info">
	<?php 
		echo $this->Form->create('Country', array('type' => 'file'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
			if( $data['Country']['img'] ){
				echo '<p><img src="/img/countries/thumbs/' . $data['Country']['img'] . '" alt="" width="250"></p>';
			}
		}

		echo $this->Form->input('title', array('label' => 'Название', 'class' => ''));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('alias', array('label' => 'Alias (Название на английском)', 'class' => ''));
		}
		// echo $this->Form->input('h1', array('label' => 'H1'));

		// echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
		// echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:', 'class' => ''));
		echo $this->Form->input('keywords', array('label' => 'Ключевые слова(для поисковиков):', 'class' => ''));
		echo $this->Form->input('description', array('label' => 'Описание(для поисковиков):', 'class' => ''));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('priority', array('label' => 'Приоритет:'));
			echo $this->Form->input('active', array('label' => 'Опубликовано:'));
			echo $this->Form->input('magistratura', array('label' => 'Языковые курсы:'));
			echo $this->Form->input('mba', array('label' => 'Среднее образование:'));
			echo $this->Form->input('vuz', array('label' => 'Высшее обарзование за рубежом:'));
		}

		echo $this->Form->input('meta_title_vuz', array('label' => 'Мета заголовок ВУЗ'));
		echo $this->Form->input('h1_vuz', array('label' => 'H1 ВУЗ'));
		echo $this->Form->input('text_vuz', array('label' => 'Текст ВУЗ', 'id' => 'editor1'));

		echo $this->Form->input('meta_title_magistratura', array('label' => 'Мета заголовок Языковые курсы'));
		echo $this->Form->input('h1_magistratura', array('label' => 'H1 Языковые курсы'));
		echo $this->Form->input('text_magistratura', array('label' => 'Текст Языковые курсы', 'id' => 'editor2'));

		echo $this->Form->input('meta_title_mba', array('label' => 'Мета заголовок Среднее обарзование'));
		echo $this->Form->input('h1_mba', array('label' => 'H1 Среднее обарзование'));
		echo $this->Form->input('text_mba', array('label' => 'Текст Среднее обарзование', 'id' => 'editor3'));

		echo $this->Form->end('Редактировать');
	?>

	<script type="text/javascript">
		CKEDITOR.replace( 'editor1' );
		CKEDITOR.replace( 'editor2' );
		CKEDITOR.replace( 'editor3' );
	</script>
</div>