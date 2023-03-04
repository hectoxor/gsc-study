<h1 class="page-heading">Оставить заявку</h1>
<div class="static-part">
	<div class="static-part__left">
		<div class="zayavka">
			<div class="zayavka__center">
				<span class="zayavka__heading">
					Напишите нам
				</span>
				<p class="zayavka__under">
					и мы рассмотрим вашу заявку в ближайшее время
				</p>
				<a class="zayavka__form" href="#"><span>Скачать форму заявки</span></a>
				<?php echo $this->Form->create('Request', array('type' => 'file'));?>
					<input placeholder="Напишите ФИО" name="data[Request][name]" class="zayavka__input" type="text">
					<input placeholder="Электронный адрес" name="data[Request][email]" class="zayavka__input" type="text">
					<textarea placeholder="Текст сообщения" name="data[Request][body]" class="zayavka__textarea" type="text"></textarea>
					<select placeholder="Выберите вид организации" name="data[Request][organization]" class="zayavka__input" type="text">
						<option selected disabled>Выберите вид организации</option>
						<option value="1">Высшие учебные заведения</option>
						<option value="1">ТиПО</option>
						<option value="1">Организации дополнительного образования</option>
						<option value="1">НИИ</option>
					</select>
					<!-- <input type="file" name="doc"> -->
					<?php echo $this->Form->input('doc', array('label' => '', 'type' => 'file', 'accept'=>'.doc, .docx' ));?>
					<div class="zayavka__btn">
						<?php echo $this->Form->end('Отправить заявку'); ?>
					</div>					
			</div>
		</div>
	</div>
	<?php echo $this->element('sidebar') ?>
</div>										
<?php echo $this->element('partners2') ?>