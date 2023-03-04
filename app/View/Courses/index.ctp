<div class="page-header-content">
	<div class="container">
		<h1 class="title">Летние курсы за рубежом</h1>
		<nav class="page-header-nav">
			<ul>
                <li><a href="javascript:;">Языковые курсы за рубежом</a></li>
                <li><a href="/<?= $lang ?>secondary_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Среднее образование</a></li>
                <li><a href="/<?= $lang ?>higher_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Высшее образование</a></li>
                <li><a href="/<?= $lang ?>glion_lesroches?type=glion<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Glion</a></li>
                <li class=""><a href="/<?= $lang ?>glion_lesroches?type=les_roches<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Les Roches</a></li>
                <li class="active"><a href="/<?= $lang ?>courses<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Летние каникулы за рубежом</a></li>
                <li class=""><a href="/<?= $lang ?>contacts<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Контакты</a></li>
            </ul>
		</nav>
	</div>
</div>

<?php if( isset($data) && $data ): ?>
	<section class="section summer-holidays">
		<div class="container">
			<h1 class="title">Список стран</h1>

			<div class="summer-holidays__items">
				<?php foreach( $data as $item ): ?>
					<div class="summer-holidays__item">
						<a class="summer-holidays__item-pic pic-increase" href="/<?= $lang ?>course/<?= $item['Course']['alias'] ?>"> 
							<img alt="" src="/img/courses/<?= $item['Course']['img'] ?>" /> 
						</a> 
						<a class="summer-holidays__item-title" href="/<?= $lang ?>course/<?= $item['Course']['alias'] ?>"><?= $item['Course']['title'] ?></a> 
						<a class="btn more" href="/<?= $lang ?>course/<?= $item['Course']['alias'] ?>">Подробнее</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<section class="section req">
	<div class="container">
		<h2 class="title">подберем для вас учебное заведение</h2>
		<div class="request">
			<form class="form" action="/requests/sendAbroad" method="POST">
                <div class="input-parent">
                    <input class="form_input" type="text" name="name" placeholder="Фамилия Имя Отчество" required="">
                    <input class="form_input" type="email" name="mail" placeholder="Электронная почта" required="">
                    <input class="form_input" type="tel" name="phone" placeholder="Номер телефона" required="">

                    <input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
                    <input name="page" value="Летние курсы за рубежом" type="hidden">
                    <?php if($this->Session->check('city')): ?>
                        <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
                    <?php else: ?>
                       <input type="hidden" name="city" value="Нур-Султан"> 
                    <?php endif ?>
                </div>
                <div class="input-parent input-parent--sec">
                        <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>
                    </div>
                <button class="btn more" type="submit">Оставить заявку</button>
            </form>
		</div>
	</div>
</section>
