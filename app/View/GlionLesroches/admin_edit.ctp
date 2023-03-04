
<?php 
	$cards_types = array('univer' => 'Об университете', 'campus' => 'Кампусы');
 ?>


<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
	<?php
		echo $this->Form->create('GlionLesroche', array('type' => 'file'));

		echo $this->Form->input('title', array('label' => 'Название:'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('type', array('label' => 'Тип учреждения', 'options' => $types));
			echo $this->Form->input('item_order', array('label' => 'Приоритет:'));
			
			echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
			if( $data['GlionLesroche']['img'] ){
				echo '<p><img src="/img/glion_lesroches/thumbs/' . $data['GlionLesroche']['img'] . '" alt=""></p>';
			}
		}

		echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
		echo $this->Form->input('requirements', array('label' => 'Требования к поступлению', 'id' => 'editor4'));
		echo $this->Form->input('residence', array('label' => 'Проживание', 'id' => 'editor2'));
		echo $this->Form->input('equipments', array('label' => 'Оснащение', 'id' => 'editor3'));
		echo $this->Form->input('video_link', array('label' => 'Youtube ID:'));
		
		echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
		echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
		echo $this->Form->input('description', array('label' => 'Описание:'));
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
	</div>

	<div class="admin_content_block">
		<div class="admin_tab_content active">
			<h1>Добавление Преимуществ</h1>

			<?php 
				echo $this->Form->create('Advan', array('controller' => 'advans', 'action' => 'add'));

				echo $this->Form->input('item_order', array('label' => 'Порядок', 'value' => 0));
				echo $this->Form->input('title', array('label' => 'Название'));
				echo $this->Form->input('body', array('label' => 'Описание'));
				echo $this->Form->input('glion_lesroche_id', array('type' => 'hidden', 'value' => $data['GlionLesroche']['id']));

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
				echo $this->Form->create('LanguageCard', array('controller' => 'language_cards', 'action' => 'add', 'type' => 'file'));

				echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
				echo $this->Form->input('type', array('label' => 'Тип карточки', 'options' => $cards_types));

				echo $this->Form->input('title', array('label' => 'Название'));
				echo $this->Form->input('img', array('label' => 'Картинка', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));

				echo $this->Form->input('glion_lesroche_id', array('type' => 'hidden', 'value' => $data['GlionLesroche']['id']));

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
						<th width="25%">Заголовок</th>
						<th>Картинка</th>
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
							<?= $advan['LanguageCard']['title'] ?>
						</td>
						<td>
							<img src="/img/language_cards/thumbs/<?= $advan['LanguageCard']['img'] ?>" alt="" width="150"> 
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
		</div>
	</div>


<?php endif; ?>

<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
	 CKEDITOR.replace( 'editor2' );
	 CKEDITOR.replace( 'editor3' );
	 CKEDITOR.replace( 'editor4' );
</script>