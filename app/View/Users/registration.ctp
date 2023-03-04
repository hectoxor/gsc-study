<div class="vhod-area">
	<div class="reg-part">
		<div class="reg-part__left">
			<div class="vhod-p">
				<div class="vhod-p__up">
					<a class="active" href="#"><?=__('Регистрация')?></a> 
					<span>|</span> 
					<a href="/<?=$lang?>users/login"><?=__('Вход')?></a>
				</div>
				<form action="/users/registration" id="UserRegistrationForm" method="POST" accept-charset="utf-8">
				<div class="vhod-p__row">
					<input name="data[User][username]" placeholder="<?=__('Электронная почта')?>" class="vhod-row__input" type="text">
				</div>
				<div class="vhod-p__row">
					<input name="data[User][password]" placeholder="<?=__('Пароль')?>" class="vhod-row__input" type="password">
				</div>
				<div class="vhod-p__row">
					<input name="data[User][password_repeat]" placeholder="<?=__('Повторный пароль')?>" class="vhod-row__input" type="password">
				</div>								
				<div class="vhod-p__row">
					<input name="data[User][name]" placeholder="<?=__('Имя')?>" class="vhod-row__input" type="text">
				</div>
				<div class="reg-bot">
					<div class="reg-bot__item">
						<div class="vhod-checkbox">
							<input name="data[User][sex]" id="man" type="radio" value="man">
							<label for="man"><?=__('Мужчина')?></label>
						</div>
					</div>
					<div class="reg-bot__item">
						<div class="vhod-checkbox">
							<input name="data[User][sex]" id="woman" type="radio" value="woman">
							<label for="woman"><?=__('Женщина')?></label>
						</div>							
					</div>
				</div>																
				<button class="btn btn--vhod" type="submit">
					<?=__('Зарегистрироваться')?>
				</button>
				</form>
				<!-- <span class="vhod-p__ili"><?=__('или')?></span>
				<div class="vhod-social">
					<div class="vhod-social__item">
						<a class="social-vhod social-vhod--fb" href="#">
							<span class="ico"></span> <?=__('через Фейсбук')?>
						</a>
					</div>
					<div class="vhod-social__item">
						<a class="social-vhod social-vhod--tw" href="#">
							<span class="ico"></span> <?=__('через Твиттер')?>
						</a>
					</div>
					<div class="vhod-social__item">
						<a class="social-vhod social-vhod--vk" href="#">
							<span class="ico"></span> <?=__('через Вконтакте')?>
						</a>
					</div>
					<div class="vhod-social__item">
						<a class="social-vhod social-vhod--gp" href="#">
							<span class="ico"></span> <?=__('через Гугл+')?>
						</a>
					</div>
				</div> -->								
			</div>
		</div>
		<div class="reg-part__right">
			<div class="reg-rights">
				<span class="reg-rights__heading">
				<?=__('Регистрируясь, вы соглашаетесь с правилами сайта')?>:
				</span>
				<ul class="reg-ul">
					<li>• <?=__('Не распространять заведомо ложную информацию, а также информацию, противоречащую законодательству Республики Казахстан')?>.</li>
					<li>• <?=__('Не разжигать межнациональную, межрелигиозную или межрасовую рознь')?>.</li>
					<li>• <?=__('Не оскорблять пользователей сайта')?>.</li>
					<li>• <?=__('Не призывать к насилию, агрессии, преступлениям и другим деструктивным действиям')?>.
					<li>• <?=__('Не пропагандировать религиозные убеждения, противоречащие убеждениям Ахлю Сунна уаль Джамаа')?>.</li>
				</ul>
				<a class="reg-rights__link" href="#"><?=__('Полные правила сайта')?></a>
			</div>
		</div>		
	</div>
</div>