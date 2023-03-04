<span class="admin-heading">Статичные страницы</span>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 
	echo $this->Form->create('Course', array('type' => 'file')); 

	if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
		echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
	}

	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('h1', array('label' => 'H1:'));

	echo $this->Form->input('short_body', array('label' => 'Краткое описание:', 'id' => 'editor_short_body'));
	echo $this->Form->input('cost_includes', array('label' => 'Стоимость включает в себя:', 'id' => 'editor_cost_incl'));
	echo $this->Form->input('cost_not_includes', array('label' => 'Не включено в стоимость:', 'id' => 'editor_cost_not_incl'));

	echo $this->Form->input('body', array('label' => 'Программа обучения:', 'id' => 'editor'));

	echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
	echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
	echo $this->Form->input('description', array('label' => 'Описание:'));

	if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
		echo $this->Form->input('alias', array('label' => 'Alias:'));
	}
?>
<div class="edit_bot">
	
	<div class="bot_r">
	<?
		echo $this->Form->end('Редактировать');
	?>
	</div>
	<script type="text/javascript">
		 CKEDITOR.replace( 'editor' );
		 CKEDITOR.replace( 'editor_short_body' );
		 CKEDITOR.replace( 'editor_cost_incl' );
		 CKEDITOR.replace( 'editor_cost_not_incl' );
	</script>
</div>
</div>


<?php if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ): ?>
	<div class="admin_tab_list">
		<div class="admin_tab active">Отзывы</div>
	</div>

	<div class="admin_content_block">

		<div class="admin_tab_content active">
			<h1>Добавление отзыва</h1>

			<?php 
				echo $this->Form->create('Review', array('type' => 'file', 'controller' => 'reviews', 'action' => 'add'));

				echo $this->Form->input('title', array('label' => 'ФИО:'));
				echo $this->Form->input('video_link', array('label' => 'Ссылка на видео'));
				echo $this->Form->input('edu_univer', array('label' => 'Место учебы'));
				echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
				echo $this->Form->input('body', array('label' => 'Отзыв', 'id' => 'editor_review_2'));
				echo $this->Form->input('body_sec', array('label' => 'Образование', 'id' => 'editor_review'));

				echo $this->Form->input('course_id', array('type' => 'hidden', 'value' => $data['Course']['id']));

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

	<script type="text/javascript">
		 CKEDITOR.replace( 'editor_review' );
		 CKEDITOR.replace( 'editor_review_2' );
	</script>
<?php endif; ?>