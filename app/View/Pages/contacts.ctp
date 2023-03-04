<div class="page_block">
	<div class="container">
		<div class="content-top">
			<div class="container">
				<h1 class="title">
					Контакты
				</h1>
		    </div>    
		</div>
		<?php echo $this->element('breadcrumbs') ?>		
		<div class="contact_block">
			<div class="contact_text">
				<p class="sub_title">Главный офис и склад</p>
				<ul class="contact_list">
					<li class="left_icon loc_2"><a><?=$this->Common->get_element(7)?></a></li>
					<li class="left_icon tel_2"><a href="tel:<?=$this->Common->get_element(1)?>"><?=$this->Common->get_element(1)?>, </a><nobr><a href="tel:<?=$this->Common->get_element(26)?>"><?=$this->Common->get_element(26)?></a></nobr></li>
					<li class="left_icon"><a><?=$this->Common->get_element(2)?></a></li>
				</ul>
				<p class="sub_title">Мы в социальных сетях</p>
				<div class="soc_btn">
					<a class="instagram soc_item" href="<?=$this->Common->get_element(4)?>" target="_blank" rel="nofollow"></a>
					<a class="facebook soc_item" href="<?=$this->Common->get_element(5)?>"  target="_blank" rel="nofollow"></a>
				</div>
				<a href="javascript:;" data-fancybox data-src="#request" class="blue_btn more">Оставить заявку</a>
			</div>
			<div class="map">
				<?=$this->Common->get_element(6)?>
			</div>
		</div>
		<div id="request" class="popup">
			<form action="/requests" class="request_form" method="POST">
				<p class="sub_title">Оставьте заявку</p>
				<label for="">Ваше имя</label>
				<input type="text" name="name">
				<label for="">Номер телефона</label>
				<input type="tel" name="phone" required>
				<label for="">E-mail адрес</label>
				<input type="email" name="email">
				<input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
				<button class="more blue_btn" type="submit">Оставить заявку</button>
			</form>
		</div>
	</div>
</div>