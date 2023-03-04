<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
	<?php
		echo $this->Form->create('LanguageSchool', array('type' => 'file'));
		
		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('city_id', array('label' => 'Город:'));
		}

		echo $this->Form->input('title', array('label' => 'Название:'));
		echo $this->Form->input('h1', array('label' => 'H1:'));
		echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
		
		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('img', array('label' => 'Изображение: ', 'type' => 'file'));
		}

		echo $this->Form->input('youtube', array('label' => 'Youtube ID:'));
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
		<div class="admin_tab">Команда</div>
	</div>

	<div class="admin_content_block">
		<div class="admin_tab_content active">
			<h1>Добавление Преимуществ</h1>

			<?php 
				echo $this->Form->create('Advan', array('controller' => 'advans', 'action' => 'add'));

				echo $this->Form->input('item_order', array('label' => 'Порядок', 'value' => 0));
				echo $this->Form->input('title', array('label' => 'Название'));
				echo $this->Form->input('body', array('label' => 'Описание'));
				echo $this->Form->input('language_school_id', array('type' => 'hidden', 'value' => $data['LanguageSchool']['id']));

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
			<h1>Добавление сотрудника</h1>

			<?php 
				echo $this->Form->create('Team', array('controller' => 'teams', 'action' => 'add', 'type' => 'file'));

				echo $this->Form->input('item_order', array('label' => 'Приоритет', 'value' => 0));
				echo $this->Form->input('title', array('label' => 'ФИО'));
				echo $this->Form->input('short_position', array('label' => 'Краткая должность'));
				echo $this->Form->input('position', array('label' => 'Должность'));
				echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor_team'));
				echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

				echo $this->Form->input('language_school_id', array('type' => 'hidden', 'value' => $data['LanguageSchool']['id']));

				echo $this->Form->end('Добавить');
			 ?>

			<br>
			<hr>
			<br>
			<h3>Сотрудники:</h3>
			<br>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>ФИО</th>
						<th>Должность</th>
						<th>Картинка</th>
						<th>Приоритет</th>
						<th>Редактирование</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $teams as $advan ): ?>
					<tr>
						<td>
							<?php echo $advan['Team']['id'] ?>
						</td>
						<td>
							<?= $advan['Team']['title'] ?>
						</td>
						<td>
							<?= $advan['Team']['position'] ?>
						</td>
						<td>
							<img src="/img/teams/thumbs/<?=$advan['Team']['img']?>" width="120">
						</td>
						<td>
							<?= $advan['Team']['item_order'] ?>
						</td>
						<td>
							<a href="/admin/teams/edit/<?php echo $advan['Team']['id'] ?>?lang=ru">rus</a> |
							<a href="/admin/teams/edit/<?php echo $advan['Team']['id'] ?>?lang=kz">kaz</a> |
							<a href="/admin/teams/edit/<?php echo $advan['Team']['id'] ?>?lang=en">eng</a> |
							<?php  echo $this->Form->postLink('Удалить', "/admin/teams/delete/{$advan['Team']['id']}", array('confirm' => 'Удалить преимущество?')) ?>
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
	 CKEDITOR.replace( 'editor_team' );
</script>