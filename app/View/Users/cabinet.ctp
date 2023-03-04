<div class="main-page">
	<?php echo $this->element('user_sidebar'); ?>
	<div class="right-part box">
		<ul class="breadcrumbs">
            <li><a href="/"><?=__('Главная')?></a></li>
            <li><?=__('Профиль')?></li>
        </ul>
		<div class="cabinet-part">
			<div class="cabinet-part__item">
				<div class="cabinet-profile">
					<span class="cabinet-profile__heading">
						<?=__('Профиль')?>
					</span>
					<form action="/users/profile" method="POST">
					<div class="cab-row">
						<label class="cab-row__label"><?=__('Фамилия')?></label>
						<input name="data[User][surname]" class="cab-row__input" value="<?=$data['User']['surname']?>" type="text">
					</div>
					<div class="cab-row">
						<label class="cab-row__label"><?=__('Имя')?></label>
						<input name="data[User][name]" class="cab-row__input" value="<?=$data['User']['name']?>" type="text">
					</div>
					<div class="cab-row">
						<label class="cab-row__label"><?=__('Отчество')?></label>
						<input name="data[User][patronymic]" class="cab-row__input" value="<?=$data['User']['patronymic']?>" type="text">
					</div>
					<div class="reg-bot">
						<div class="reg-bot__item">
							<div class="vhod-checkbox">
								<input value="man" name="data[User][sex]" id="man" type="radio" <?=($data['User']['sex'] == 'man' ? 'checked' : '')?> >
								<label for="man"><?=__('Мужчина')?></label>
							</div>
						</div>
						<div class="reg-bot__item">
							<div class="vhod-checkbox">
								<input value="woman" name="data[User][sex]" id="woman" type="radio" <?=($data['User']['sex'] == 'woman' ? 'checked' : '')?>>
								<label for="woman"><?=__('Женщина')?></label>
							</div>							
						</div>
					</div>
					<div class="cab-row">
						<label class="cab-row__label"><?=__('Город проживания')?></label>
						<select class="cab-row__select" name="data[User][city_id]">
							<option value="0"><?=__('Выберите город')?></option>
						<?php foreach($cities as $key => $value): ?>
							<option value="<?=$key?>" <?= ($data['User']['city_id'] == $key)? 'selected' : '' ?>><?=$value?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="cab-save cab-save--save">
						<button class="btn" type="submit"><?=__('Сохарнить изменение')?></button>
					</div>																		</form>
				</div>
			</div>
			<div class="cabinet-part__item">
				<div class="cabinet-profile">
					<span class="cabinet-profile__heading">
						Пароль
					</span>
					<form method="POST" action="/users/pswedit">
					<div class="cab-row">
						<label class="cab-row__label">Введите старый пароль</label>
						<input required name="data[User][current_password]" class="cab-row__input" type="password">
					</div>
					<div class="cab-row">
						<label class="cab-row__label">Введите новый пароль</label>
						<input required name="data[User][password]" class="cab-row__input"  type="password">
					</div>
					<div class="cab-row">
						<label class="cab-row__label">Потвердите новый пароль</label>
						<input required name="data[User][password_retype]" class="cab-row__input" type="password">
					</div>
					
					<div class="cab-save">
						<button class="btn" type="submit">Изменить пароль</button>
					</div>																		</form>
				</div>
			</div>
		</div>																					
	</div>
</div>