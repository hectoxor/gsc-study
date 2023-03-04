<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 
	echo $this->Form->create('Setting', array('type' => 'file'));
	echo $this->Form->input('telegram', array('label' => 'telegram:'));
	echo $this->Form->input('fb', array('label' => 'fb:'));
	echo $this->Form->input('instagram', array('label' => 'instagram:'));
	echo $this->Form->input('whatsapp', array('label' => 'whatsapp:'));
	echo $this->Form->input('email', array('label' => 'E-mail:'));
	echo $this->Form->input('address', array('label' => 'Адрес (Астана):'));
	echo $this->Form->input('phone', array('label' => 'Телефон (Астана):'));
	echo $this->Form->input('phone2', array('label' => 'Телефон 2 (Астана):'));
	echo $this->Form->input('map', array('label' => 'Карта (Астана):'));

	echo $this->Form->input('krg_address', array('label' => 'Адрес (Караганда):'));
	echo $this->Form->input('krg_phone', array('label' => 'Телефон (Караганда):'));
	echo $this->Form->input('krg_phone2', array('label' => 'Телефон 2 (Караганда):'));
	echo $this->Form->input('map_krg', array('label' => 'Карта (Караганда):'));

	echo $this->Form->input('seo-main-title', array('label' => 'Мета заголовок:'));
	echo $this->Form->input('seo-main-keywords', array('label' => 'Мета ключевые слова:'));
	echo $this->Form->input('seo-main-description', array('label' => 'Мета описание:'));
	echo $this->Form->input('id');
	echo $this->Form->end('Редактировать');
 ?>
</div>
