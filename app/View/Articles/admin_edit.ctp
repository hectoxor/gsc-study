<span class="admin-heading">Статьи</span>
<div class="content-up">
	<span class="content-up__heading">Редактирование материала</span>
</div>
<div class="add-part">
	<?php
		echo $this->Form->create('Article', array('type' => 'file'));
		echo $this->Form->input('title', array('label' => 'Название:'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('date', array('label' => 'Дата:'));
			echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
			if( $data['Article']['img'] ){
				echo '<p><img src="/img/articles/' . $data['Article']['img'] . '" alt="" width="300"></p>';
			}
		}


		echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
		echo $this->Form->input('meta_title', array('label' => 'Мета заголовок:'));
		echo $this->Form->input('h1', array('label' => 'h1:'));
		echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
		echo $this->Form->input('description', array('label' => 'Описание:'));

		if( isset($_GET['lang']) && $_GET['lang'] == 'ru' ){
			echo $this->Form->input('alias', array('label' => 'Алиас:'));
		}
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