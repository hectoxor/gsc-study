<div class="content-up">
	<span class="content-up__heading">Редактирование пароля</span>
</div>
<div class="add-part">
<?php 
echo $this->Form->create('User', array('type' => 'file'));
echo $this->Form->input('password', array('label' => 'Пароль:'));
echo $this->Form->input('password_repeat', array('label' => 'Подтвердите пароль:', 'type' => 'password'));
echo $this->Form->end('Редактировать');
?>
</div>