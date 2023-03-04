<span class="admin-heading">Новости</span>
<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">
	<?php
		echo $this->Form->create('News', array('type' => 'file'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('city_id', array('label' => 'Город:'));
		}
		echo $this->Form->input('title', array('label' => 'Название:'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('date', array('label' => 'Дата:'));
			echo $this->Form->input('img', array('label' => 'Картинка: 950px X 620px', 'type' => 'file'));
		}

		echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
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
	<script type="text/javascript">
		 CKEDITOR.replace( 'editor' );
	</script>
</div>


<?php if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ): ?>
	<div class="admin_tab_list">
		<div class="admin_tab active">Галерея</div>
	</div>

	<div class="admin_content_block">
		<div class="admin_tab_content active">
			<h1>Добавление Фото</h1>

			<?php 
				echo $this->Form->create('Photo', array('controller' => 'photos', 'action' => 'add', 'type' => 'file'));

				echo $this->Form->input('item_order', array('label' => 'Порядок', 'value' => 0));
				echo $this->Form->input('img', array('label' => 'Фото:', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif', 'required'));
				echo $this->Form->input('news_id', array('type' => 'hidden', 'value' => $data['News']['id']));

				echo $this->Form->end('Добавить');
			 ?>

			<br>
			<hr>
			<br>
			<h3>Список Фото:</h3>
			<br>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Фото</th>
						<th>Приоритет</th>
						<th>Редактирование</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $photos as $item ): ?>
					<tr>
						<td>
							<?php echo $item['Photo']['id'] ?>
						</td>
						<td>
							<img src="/img/photos/thumbs/<?= $item['Photo']['img'] ?>" alt="" width="300">
						</td>
						<td>
							<?= $item['Photo']['item_order'] ?>
						</td>
						<td>
							<a href="/admin/photos/edit/<?php echo $item['Photo']['id'] ?>">Редактировать</a> |
							<?php  echo $this->Form->postLink('Удалить', "/admin/photos/delete/{$item['Photo']['id']}", array('confirm' => 'Удалить преимущество?')) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
<?php endif; ?>