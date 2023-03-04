
<?php 
	$cards_types = array('none' => 'Нет', 'edu' => 'Обучение', 'program' => 'Программы');
	$types = array('' => 'Вид образования', 'kurs' => 'Языковые курсы', 'srednee' => 'Среднее образование', 'visshee' => 'Высшее образование');
	$edu_types = array('' => 'Вид учреждения', 'univer' => 'Университет', 'college' => 'Колледж', 'school' => 'Школа');
 ?>

<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование учебного заведения</h2>
	</div>
	<?php 
		echo $this->Form->create('University', array('type' => 'file'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('img', array('label' => 'Изображение: (650px X 390px)', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));
			if( $data['University']['img'] ){
				echo '<p><img src="/img/universities/thumbs/' . $data['University']['img'] . '" alt="" width="300"></p>';
			}

			echo $this->Form->input('country_id', array('label' => 'Страны:'));
		}

		echo $this->Form->input('title', array('label' => 'Заголовок'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('city_name', array('label' => 'Город:'));
			echo $this->Form->input('price', array('label' => 'Стоимость'));
			// echo $this->Form->input('edu_language_id', array('label' => 'Язык обучения', 'options' => $edu_langs));
		?>
			<div class="input">
				<label>Выберите языки обучения:</label>
				<div class="lang_list">
					<?php foreach( $edu_langs as $edu_lang_id => $edu_lang_name ): ?>
						<label for="EduLang_<?= $edu_lang_id ?>">
							<input id="EduLang_<?= $edu_lang_id ?>" type="checkbox" name="data[University][edu_language_ids][]" value="<?= $edu_lang_id ?>" <?= ( in_array($edu_lang_id, $checked_langs) ? 'checked' : '' ) ?> >
							<span><?= $edu_lang_name ?></span>
						</label>
					<?php endforeach; ?>
				</div>
			</div>

		<?php
			echo $this->Form->input('edu_type', array('label' => 'Тип учреждения', 'options' => $edu_types));
			echo $this->Form->input('type', array('label' => 'Вид образования', 'options' => $types));
			echo $this->Form->input('program', array('label' => 'Краткое описание', 'id' => 'program_text'));
		}

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

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('youtube', array('label' => 'Youtube ID:'));

			echo $this->Form->input('residence_img', array('label' => 'Картинка', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));
			if( $data['University']['residence_img'] ){
				echo '<p><img src="/img/universities/thumbs/' . $data['University']['residence_img'] . '" alt="" width="300"></p>';
			}

			echo "<hr>";
			echo "<h2>SEO</h2>";

			echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
			echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
			echo $this->Form->input('description', array('label' => 'Описание:'));
		}
	?>

	<div class="edit_bot">
		<div class="bot_r">
			<?php echo $this->Form->end('Редактировать'); ?>
		</div>
	</div>
</div>


<?php if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ): ?>
	<div class="admin_tab_list">
		<div class="admin_tab active">Преимущества</div>
		<!-- <div class="admin_tab">Карточки</div> -->
		<div class="admin_tab">Отзывы</div>
	</div>

	<div class="admin_content_block">
		<div class="admin_tab_content active">
			<h1>Добавление Преимуществ</h1>

			<?php 
				echo $this->Form->create('Advan', array('controller' => 'advans', 'action' => 'add'));

				echo $this->Form->input('item_order', array('label' => 'Порядок', 'value' => 0));
				echo $this->Form->input('title', array('label' => 'Название'));
				echo $this->Form->input('body', array('label' => 'Описание'));
				echo $this->Form->input('university_id', array('type' => 'hidden', 'value' => $data['University']['id']));

				echo $this->Form->end('Добавить');
			 ?>

			<br>
			<hr>
			<br>
			<h3>Список Преимуществ:</h3>
			<br>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Заголовок</th>
						<th>Описание</th>
						<th>Приоритет</th>
						<th>Редактирование</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $advans as $advan ): ?>
					<tr>
						<td>
							<?php echo $advan['Advan']['id'] ?>
						</td>
						<td>
							<?= $advan['Advan']['title'] ?>
						</td>
						<td>
							<?= $advan['Advan']['body'] ?>
						</td>
						<td>
							<?= $advan['Advan']['item_order'] ?>
						</td>
						<td>
							<a href="/admin/advans/edit/<?php echo $advan['Advan']['id'] ?>?lang=ru">rus</a> |
							<a href="/admin/advans/edit/<?php echo $advan['Advan']['id'] ?>?lang=kz">kaz</a> |
							<a href="/admin/advans/edit/<?php echo $advan['Advan']['id'] ?>?lang=en">eng</a> |
							<?php  echo $this->Form->postLink('Удалить', "/admin/advans/delete/{$advan['Advan']['id']}", array('confirm' => 'Удалить преимущество?')) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<!-- <div class="admin_tab_content">
			<h1>Добавление карточки</h1>

			<?php 
				echo $this->Form->create('LanguageCard', array('controller' => 'language_cards', 'action' => 'add'));

				echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
				echo $this->Form->input('type', array('label' => 'Тип карточки', 'options' => $cards_types));

				echo $this->Form->input('title', array('label' => 'Название'));
				echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor_3'));

				echo $this->Form->input('university_id', array('type' => 'hidden', 'value' => $data['University']['id']));

				echo $this->Form->end('Добавить');
			 ?>

			<br>
			<hr>
			<br>
			<h3>Список карточек:</h3>
			<br>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Заголовок/Описание</th>
						<th>Тип</th>
						<th>Приоритет</th>
						<th>Редактирование</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $cards as $advan ): ?>
					<tr>
						<td>
							<?php echo $advan['LanguageCard']['id'] ?>
						</td>
						<td>
							<?= $advan['LanguageCard']['title'] ? $advan['LanguageCard']['title'] : mb_substr(strip_tags($advan['LanguageCard']['body']), 0, 50) .'...' ?>
						</td>
						<td>
							<?= $cards_types[$advan['LanguageCard']['type']] ?>
						</td>
						<td>
							<?= $advan['LanguageCard']['item_order'] ?>
						</td>
						<td>
							<a href="/admin/language_cards/edit/<?php echo $advan['LanguageCard']['id'] ?>?lang=ru">rus</a> |
							<a href="/admin/language_cards/edit/<?php echo $advan['LanguageCard']['id'] ?>?lang=kz">kaz</a> |
							<a href="/admin/language_cards/edit/<?php echo $advan['LanguageCard']['id'] ?>?lang=en">eng</a> |
							<?php  echo $this->Form->postLink('Удалить', "/admin/language_cards/delete/{$advan['LanguageCard']['id']}", array('confirm' => 'Удалить материал?')) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div> -->

		<div class="admin_tab_content">
			<h1>Добавление отзыва</h1>

			<?php 
				echo $this->Form->create('Review', array('type' => 'file', 'controller' => 'reviews', 'action' => 'add'));

				echo $this->Form->input('title', array('label' => 'ФИО:'));
				echo $this->Form->input('video_link', array('label' => 'Ссылка на видео'));
				echo $this->Form->input('edu_univer', array('label' => 'Место учебы'));
				echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
				echo $this->Form->input('body', array('label' => 'Отзыв', 'id' => 'editor_4'));
				echo $this->Form->input('body_sec', array('label' => 'Образование', 'id' => 'editor_5'));

				echo $this->Form->input('university_id', array('type' => 'hidden', 'value' => $data['University']['id']));

				echo $this->Form->end('Добавить');
			 ?>

			<br>
			<hr>
			<br>
			<h3>Список отзывов:</h3>
			<br>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>ФИО</th>
						<th>Картинка</th>
						<th>Место учебы</th>
						<th>Редактирование</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $reviews as $advan ): ?>
					<tr>
						<td>
							<?php echo $advan['Review']['id'] ?>
						</td>
						<td>
							<?= $advan['Review']['title'] ?>
						</td>
						<td>
							<img src="/img/reviews/thumbs/<?=$advan['Review']['img']?>" width="120">
						</td>
						
						<td>
							<?= $advan['Review']['edu_univer'] ?>
						</td>
						<td>
							<a href="/admin/reviews/edit/<?php echo $advan['Review']['id'] ?>?lang=ru">rus</a> |
							<a href="/admin/reviews/edit/<?php echo $advan['Review']['id'] ?>?lang=kz">kaz</a> |
							<a href="/admin/reviews/edit/<?php echo $advan['Review']['id'] ?>?lang=en">eng</a> |
							<?php  echo $this->Form->postLink('Удалить', "/admin/reviews/delete/{$advan['Review']['id']}", array('confirm' => 'Удалить материал?')) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
<?php endif; ?>


<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
	 CKEDITOR.replace( 'editor2' );
	 // CKEDITOR.replace( 'editor_3' );

	 CKEDITOR.replace( 'program_text' );

	 CKEDITOR.replace( 'new_body' );
	 CKEDITOR.replace( 'new_body_card' );

	 CKEDITOR.replace( 'editor_4' );
	 CKEDITOR.replace( 'editor_5' );

	 CKEDITOR.replace( 'editor_body_program' );
	 CKEDITOR.replace( 'editor_body_edu_program' );
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