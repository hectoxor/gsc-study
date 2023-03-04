<div class="content-top">
    <div class="container">
        <h1 class="title">
            <?=$h1?>
        </h1>
        <nav class="page-header-nav">
            <ul>
                <li class=""><a href="/<?= $lang ?>language-school?city=<?=$current_city?>">О языковой школе</a></li>
                <li class="active"><a href="javascript:;">Языковые курсы</a></li>
                <li class=""><a href="/<?= $lang ?>test">Онлайн тест</a></li>
                <li class=""><a href="/<?= $lang ?>contacts?type=school&city=<?=$current_city?>">Контакты</a></li>
            </ul>
        </nav>
    </div>    
</div>
<section class="section lang-courses-view">
    <div class="container">
        <div class="lang-courses__item">
            <div class="lang-courses__item-info lang-courses__item-info--lang">
                <h1 class="title"><?= $data['LanguageProgram']['h1'] ?></h1>
                <div class="lang-courses__item-texts">
                    <?= $data['LanguageProgram']['body'] ?>
                </div>
            </div>
            <a href="javascript:;" class="lang-courses__item-pic pic-increase">
                <img src="/img/language_programs/<?= $data['LanguageProgram']['img'] ?>" alt="">
            </a>
        </div>
        <?php if( isset($advans) && $advans ): ?>
	        <div class="adv-numbers none">
	        	<?php foreach( $advans as $item ): ?>
		            <div class="adv-number">
		                <div class="adv__title"><?= $item['Advan']['title'] ?></div>
		                <p><?= $item['Advan']['body'] ?></p>
		            </div>
	        	<?php endforeach; ?>
	        </div>
        <?php endif; ?>

        <?php if( isset($cards) && $cards ): ?>
	        <div class="advantages">
	        	<?php foreach( $cards as $item ): ?>
		            <div class="advantages__item">
		            	<?php if( $item['LanguageCard']['title'] ): ?>
		                	<h3 class="advantages__title"><?= $item['LanguageCard']['title'] ?></h3>
		            	<?php endif; ?>
		                <?= $item['LanguageCard']['body'] ?>
		            </div>
	        	<?php endforeach; ?>
	        </div>
        <?php endif; ?>
    </div>
</section>

<?php if( $data['LanguageProgram']['program_body'] ): ?>
	<section class="section program-study">
	    <div class="container">
	    	<div class="text">
                <?= $data['LanguageProgram']['program_body'] ?>
            </div>
	    </div>
	</section>
<?php endif; ?>

<?php if( isset($companies) && $companies ): ?>
	<section class="section organizations">
		<div class="container">
			<h2 class="title">Организации прошедшие обучение у нас</h2>
			<div class="organizations__items">
				<?php foreach( $companies as $item ): ?>
					<a href="javascript:;" class="organizations__item pic-increase">
						<img src="/img/program_companies/<?= $item['ProgramCompany']['img'] ?>" alt="">
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if( isset($reviews) && $reviews ): ?>
    <section class="section reviews">
        <div class="container">
            <h2 class="title">отзывы наших студентов</h2>
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
        <h2 class="title">Оставить заявку</h2>
        <div class="request">
            <form class="form" action="/requests/send" method="POST">
                <div class="input-parent">
                    <input class="form_input" type="text" name="name" placeholder="Фамилия Имя Отчество" required="">
                    <input class="form_input" type="email" name="mail" placeholder="Электронная почта" required="">
                    <input class="form_input" type="tel" name="phone" placeholder="Номер телефона" required="">

                    <input type="hidden" name="page" value="<?= $data['LanguageProgram']['h1'] ?>">
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

