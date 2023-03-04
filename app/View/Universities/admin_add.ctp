<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление учебного заведения</h2>
	</div>
<?php 
	$types = array('' => 'Вид образования', 'kurs' => 'Языковые курсы', 'srednee' => 'Среднее образование', 'visshee' => 'Высшее образование');
	$edu_types = array('' => 'Вид учреждения', 'univer' => 'Университет', 'college' => 'Колледж', 'school' => 'Школа');
?>


<?php 
	echo $this->Form->create('University', array('type' => 'file'));
?>

<?php
	echo $this->Form->input('img', array('label' => 'Изображение: (650px X 400px)', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));
	echo $this->Form->input('country_id', array('label' => 'Страны:'));

	echo $this->Form->input('title', array('label' => 'Заголовок'));
	echo $this->Form->input('city_name', array('label' => 'Город:'));
	echo $this->Form->input('price', array('label' => 'Стоимость'));
	
	// echo $this->Form->input('edu_language_id', array('label' => 'Язык обучения', 'options' => $edu_langs));
?>
	
	<div class="input">
		<label>Выберите языки обучения:</label>
		<div class="lang_list">
			<?php foreach( $edu_langs as $edu_lang_id => $edu_lang_name ): ?>
				<label for="EduLang_<?= $edu_lang_id ?>">
					<input id="EduLang_<?= $edu_lang_id ?>" type="checkbox" name="data[University][edu_language_ids][]" value="<?= $edu_lang_id ?>">
					<span><?= $edu_lang_name ?></span>
				</label>
			<?php endforeach; ?>
		</div>
	</div>

<?php

	echo $this->Form->input('edu_type', array('label' => 'Тип учреждения', 'options' => $edu_types));
	echo $this->Form->input('type', array('label' => 'Вид образования', 'options' => $types));
	echo $this->Form->input('program', array('label' => 'Краткое описание', 'id' => 'program_text'));

	echo "<hr>";
	echo "<h2>Об учебном заведении</h2>";

	// echo $this->Form->input('body_title', array('label' => 'Заголовок:'));
	echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

	echo "<hr>";
	echo "<h2>Обучение</h2>";

	// echo $this->Form->input('body_edu_title', array('label' => 'Заголовок'));
	echo $this->Form->input('body_edu', array('label' => 'Описание', 'id' => 'new_body'));
	echo $this->Form->input('body_program', array('label' => 'Карточка', 'id' => 'new_body_card'));


	echo "<hr>";
	echo "<h2>Проживание</h2>";

	// echo $this->Form->input('residence_title', array('label' => 'Заголовок'));
	echo $this->Form->input('residence', array('label' => 'Описание', 'id' => 'editor2'));
	echo $this->Form->input('youtube', array('label' => 'Youtube ID:'));
	echo $this->Form->input('residence_img', array('label' => 'Картинка', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));

	echo "<hr>";
	echo "<h2>SEO</h2>";
	
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
	 
	 CKEDITOR.replace( 'program_text' );

	 CKEDITOR.replace( 'new_body' );
	 CKEDITOR.replace( 'new_body_card' );

</script>

<style type="text/css">
	.lang_list{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		cursor: default;
	}
	.lang_list label{
		display: flex;
		align-items: center;
		margin-bottom: 10px;
		margin-right: 20px;
		cursor: pointer;
	}
	.lang_list label input{
		margin-bottom: 0;
	}
</style>