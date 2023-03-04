<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление учебного заведения</h2>
	</div>

<?php 
	$types = array('' => 'Вид образования', 'kurs' => 'Языковые курсы', 'srednee' => 'Среднее образование', 'visshee' => 'Высшее образование');
	$edu_types = array('' => 'Вид учреждения', 'univer' => 'Университет', 'college' => 'Колледж', 'school' => 'Школа');
?>

<?php 
	echo $this->Form->create('EduOrganization', array('type' => 'file'));

	echo $this->Form->input('img', array('label' => 'Изображение: (650px X 390px)', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));
	echo $this->Form->input('country_id', array('label' => 'Страны:'));

	echo $this->Form->input('title', array('label' => 'Заголовок'));
	echo $this->Form->input('city_name', array('label' => 'Город:'));
	echo $this->Form->input('price', array('label' => 'Стоимость'));
	echo $this->Form->input('program', array('label' => 'Форма обучения'));
	echo $this->Form->input('edu_language_id', array('label' => 'Язык обучения', 'options' => $edu_langs));
	echo $this->Form->input('edu_type', array('label' => 'Тип учреждения', 'options' => $edu_types));
	echo $this->Form->input('type', array('label' => 'Вид образования', 'options' => $types));

	echo "<hr>";
	echo "<h2>Об учебном заведении</h2>";

	echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

	echo "<hr>";
	echo "<h2>Обучение</h2>";

	echo $this->Form->input('body_edu', array('label' => 'Описание', 'id' => 'new_body'));
	echo $this->Form->input('body_edu_program', array('label' => 'Карточка', 'id' => 'new_body_card'));


	echo "<hr>";
	echo "<h2>Проживание</h2>";

	echo $this->Form->input('residence', array('label' => 'Описание', 'id' => 'editor2'));
	echo $this->Form->input('residence_youtube', array('label' => 'Youtube ID:'));
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

	 CKEDITOR.replace( 'new_body' );
	 CKEDITOR.replace( 'new_body_card' );

</script>