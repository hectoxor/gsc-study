<h1>Редактирование материала</h1>

<?php 
	if( $data['LanguageCard']['glion_lesroche_id'] ){
		$cards_types = array('univer' => 'Об университете', 'campus' => 'Кампусы');
	} else{
		$cards_types = array('none' => 'Нет', 'edu' => 'Обучение', 'program' => 'Программы');
	}
 ?>

<?php 

echo $this->Form->create('LanguageCard', array('type' => 'file'));

if( $_GET['lang'] == 'ru' ){
	echo $this->Form->input('item_order', array('label' => 'Приоритет'));
	echo $this->Form->input('type', array('label' => 'Тип карточки', 'options' => $cards_types));
	
	if( $data['LanguageCard']['glion_lesroche_id'] ){
		echo $this->Form->input('img', array('label' => 'Картинка', 'type' => 'file', 'accept' => 'image/jpeg, image/png, image/gif'));
		if( $data['LanguageCard']['img'] ){
			echo '<p><img src="/img/language_cards/thumbs/' . $data['LanguageCard']['img'] . '" alt=""></p>';
		}
	}
}

echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

echo $this->Form->end('Редактировать');
?>

<script>
    CKEDITOR.replace( 'editor' );
</script>