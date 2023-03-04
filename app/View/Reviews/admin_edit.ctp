
<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование отзыва</h2>
	</div>
	<?php 
		echo $this->Form->create('Review', array('type' => 'file'));
	?>
	<div class="edit_bot">

		<div class="bot_r">
			<?php
				if( isset($_GET['lang']) && $_GET['lang'] == 'ru' && $data['Review']['city_id'] ){
					echo $this->Form->input('city_id', array('label' => 'Город:'));
				}
				echo $this->Form->input('title', array('label' => 'ФИО:'));
				echo $this->Form->input('video_link', array('label' => 'Ссылка на видео'));
				echo $this->Form->input('edu_univer', array('label' => 'Место учебы'));

				if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
					echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
				}
				echo $this->Form->input('body', array('label' => 'Отзыв', 'id' => 'editor'));
				echo $this->Form->input('body_sec', array('label' => 'Образование', 'id' => 'editor_2'));
				
				if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
					echo $this->Form->input('priority', array('label' => 'Приоритет:'));
					echo $this->Form->input('active', array('label' => 'Опубликовано:', 'type' => 'checkbox'));	
				}
				echo $this->Form->end('Редактировать');
			?>
		</div>
	</div>
</div>

<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
	 CKEDITOR.replace( 'editor_2' );
</script>