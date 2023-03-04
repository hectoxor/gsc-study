<section class="section secondary-education-view">
    <div class="container">
        <div class="lang-courses__item">
            <div class="lang-courses__item-info">
                <h1 class="title"><?= $data['Course']['h1'] ?></h1>
                <?php if( $data['Course']['short_body'] ): ?>
	                <div class="lang-courses__item-texts">
	                	<?= $data['Course']['short_body'] ?>
	                </div>
                <?php endif; ?>
            </div>
            <a href="javascript:;" class="lang-courses__item-pic pic-increase">
                <img src="/img/courses/<?= $data['Course']['img'] ?>" alt="">
            </a>
        </div>
        <div class="cost">
        	<?php if( $data['Course']['cost_includes'] ): ?>
	            <div class="cost-left">
	                <h3 class="cost-title">Стоимость включает в себя</h3>
	                <?= $data['Course']['cost_includes'] ?>
	            </div>
        	<?php endif; ?>
        	<?php if( $data['Course']['cost_not_includes'] ): ?>
	            <div class="cost-right">
	                <h3 class="cost-title">Не включено</h3>
	                <?= $data['Course']['cost_not_includes'] ?>
	            </div>
        	<?php endif; ?>
        </div>
    </div>
</section>

<?php if( $data['Course']['body'] ): ?>
	<section class="section program-study">
	    <div class="container">
            <h2 class="title">Программа летних каникул</h2>
	        <?= $data['Course']['body'] ?>
	    </div>
	</section>
<?php endif; ?>

<?php if( isset($reviews) && $reviews ): ?>
    <section class="section reviews">
        <div class="container">
            <h2 class="title">Отзывы наших студентов</h2>
            <?php foreach( $reviews as $item ): ?>
                <div class="reviews__item">
                    <a href="javascript:;" class="reviews__item-pic pic-increase">
                        <img src="/img/reviews/<?= $item['Review']['img'] ?>" alt="">
                    </a>
                    <div class="reviews__item-info">
                        <div class="student-pos"><?= $item['Review']['edu_univer'] ?></div>
                        <h3 class="reviews-title"><?= $item['Review']['title'] ?></h3>
                        <div class="reviews__item-texts">
                            <?= $item['Review']['body'] ?>
                        </div>
                        <a href="javascript:;" class="btn more">Подробнее</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<section class="section req">
	<div class="container">
		<h2 class="title">Подберем для вас учебное заведение</h2>
		<div class="request">
			<form class="form" action="/requests/send" method="POST">
                <div class="input-parent">
                    <input class="form_input" type="text" name="name" placeholder="Фамилия Имя Отчество" required="">
                    <input class="form_input" type="email" name="mail" placeholder="Электронная почта" required="">
                    <input class="form_input" type="tel" name="phone" placeholder="Номер телефона" required="">

                    <input type="hidden" name="page" value="<?= $data['Course']['h1'] ?>">
                    <input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
                    <?php if($this->Session->check('city')): ?>
                        <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
                    <?php else: ?>
                       <input type="hidden" name="city" value="Нур-Султан"> 
                    <?php endif ?>
                </div>
                <div class="input-parent input-parent--sec">
                        <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>
                    </div>
                <button class="btn more" type="submit">оставить заявку</button>
            </form>
		</div>
	</div>
</section>