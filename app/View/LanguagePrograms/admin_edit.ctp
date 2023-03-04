<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
	<?php
		echo $this->Form->create('LanguageProgram', array('type' => 'file'));
		
		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('city_id', array('label' => 'Город:'));
		}

		echo $this->Form->input('title', array('label' => 'Название:'));
		echo $this->Form->input('alias', array('label' => 'Название на английском:'));
		echo $this->Form->input('h1', array('label' => 'H1:'));
		echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
		echo $this->Form->input('program_body', array('label' => 'Программа обучения:', 'id' => 'editor_2'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('img', array('label' => 'Изображение: ', 'type' => 'file'));
		}

		echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
		echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
		echo $this->Form->input('description', array('label' => 'Описание:'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('priority', array('label' => 'Приоритет:'));
			echo $this->Form->input('active', array('label' => 'Опубликовано:'));
		}
		
		echo $this->Form->input('breadcrumbs', array('label' => 'Хлебная крошка:'));
	?>
	<div class="edit_bot">
		<div class="bot_r">
		<?
			echo $this->Form->input('id');
			echo $this->Form->end('Редактировать');
		?>
		</div>
	</div>
</div>


<?php if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ): ?>
	<div class="admin_tab_list">
		<div class="admin_tab active">Преимущества</div>
		<div class="admin_tab">Карточки</div>
		<div class="admin_tab">Компании</div>
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
				echo $this->Form->input('language_program_id', array('type' => 'hidden', 'value' => $data['LanguageProgram']['id']));

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

		<div class="admin_tab_content">
			<h1>Добавление карточки</h1>

			<?php 
				echo $this->Form->create('LanguageCard', array('controller' => 'language_cards', 'action' => 'add'));

				echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
				echo $this->Form->input('title', array('label' => 'Название'));
				echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor_3'));

				echo $this->Form->input('language_program_id', array('type' => 'hidden', 'value' => $data['LanguageProgram']['id']));

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
						<th>Заголовок</th>
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
							<?= $advan['LanguageCard']['title'] ?>
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
		</div>

		<div class="admin_tab_content">
			<h1>Добавление карточки</h1>

			<?php 
				echo $this->Form->create('ProgramCompany', array('type' => 'file', 'controller' => 'program_companies', 'action' => 'add'));

				echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
				echo $this->Form->input('title', array('label' => 'Название компании'));
				echo $this->Form->input('link', array('label' => 'Ссылка'));
				echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file', 'required'));

				echo $this->Form->input('language_program_id', array('type' => 'hidden', 'value' => $data['LanguageProgram']['id']));

				echo $this->Form->end('Добавить');
			 ?>

			<br>
			<hr>
			<br>
			<h3>Список компаний:</h3>
			<br>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Картинка</th>
						<th>Название</th>
						<th>Приоритет</th>
						<th>Редактирование</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $companies as $advan ): ?>
					<tr>
						<td>
							<?php echo $advan['ProgramCompany']['id'] ?>
						</td>
						<td>
							<img src="/img/program_companies/thumbs/<?=$advan['ProgramCompany']['img']?>" width="120">
						</td>
						<td>
							<?= $advan['ProgramCompany']['title'] ?>
						</td>
						<td>
							<?= $advan['ProgramCompany']['item_order'] ?>
						</td>
						<td>
							<a href="/admin/program_companies/edit/<?php echo $advan['ProgramCompany']['id'] ?>">Редактировать</a> |
							<?php  echo $this->Form->postLink('Удалить', "/admin/program_companies/delete/{$advan['ProgramCompany']['id']}", array('confirm' => 'Удалить материал?')) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

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

				echo $this->Form->input('language_program_id', array('type' => 'hidden', 'value' => $data['LanguageProgram']['id']));

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
	 CKEDITOR.replace( 'editor_2' );
	 CKEDITOR.replace( 'editor_3' );
	 CKEDITOR.replace( 'editor_4' );
	 CKEDITOR.replace( 'editor_5' );
</script>