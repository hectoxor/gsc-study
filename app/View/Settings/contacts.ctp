<ul class="breadcrumbs">
	<li>
		<a href="/">Главная</a>
	</li>
	<li>
		<span>Контакты</span>
	</li>					
</ul>
<div class="contact-part">
	<div class="contact-part__left">
		<div class="contacts">
			<span class="contacts__heading">
				Контакты
			</span>
			<ul class="contact-ul">
				<li>
					 <div class="cont-row cont-row--number"><?=$params['phone']?></div>
				</li>
				<li>
					<div class="cont-row cont-row--number"><?=$params['krg_phone']?></div>
				</li>
				<li>
					<div class="cont-row cont-row--mail"><?=$params['email']?></div>
				</li>
				<li>
					<div class="cont-row cont-row--mail">info@bagrain.kz</div>
				</li>
				<li>
					<div class="cont-row cont-row--adress"><?=$params['address']?></div>
				</li>
				<li>
					<div class="cont-row cont-row--adress"><?=$params['krg_address']?></div>
				</li>
			</ul>
			<div class="contacts-map">
				<div class="city-select">
					<span class="city-select__heading">г.Астана</span>
					<ul class="city-ul">
						<li class="active">
							<a href="#astana">г.Астана</a>
						</li>
						<li>
							<a href="#karaganda">г.Караганда</a>
						</li>
					</ul>
				</div>
				<div class="map-area">
					<div id="astana" class="map-area__item active">
						<?=$params['map']?>
					</div>
					<div id="karaganda" class="map-area__item">
						<?=$params['map_krg']?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-part__right">
		<div class="contact-form">
			<span class="contact-form__vopros">
				Есть вопросы ?
			</span>
			<span class="contact-form__perezvonim">
				мы перезвоним!
			</span>
			<div class="popup-input">
				<label class="popup-input__label">Ваше имя:</label>
				<input class="popup-input__input" type="text">
			</div>
			<div class="popup-input">
				<label class="popup-input__label">Телефон:</label>
				<input class="popup-input__input" type="text">
			</div>
			<div class="popup-input">
				<label class="popup-input__label">Email:</label>
				<input class="popup-input__input" type="text">
			</div>							
			<button class="contact-form__submit" type="submit">
				Оставить зявку
			</button>
		</div>
	</div>
</div>