<div class="content">
	<div class="content-top">
		<div class="container">
			<?php echo $this->element('breadcrumbs') ?>
			<h1 class="title"><?= $data['GlionLesroche']['title'] ?></h1>
	    </div>    
	</div>
	<div class="container">
        <div class="video" data-fancybox data-src="https://www.youtube.com/embed/<?= $data['GlionLesroche']['video_link'] ?>">
            <img src="/img/glion_lesroches/<?= $data['GlionLesroche']['img'] ?>" alt="">
        </div>
        <div class="about-univer">
            <h2 class="title">Об университете</h2>
            <div class="text">
                <?= $data['GlionLesroche']['body'] ?>
            </div>
        </div>
        <?php if( isset($cards_univer) && $cards_univer ): ?>
            <div class="glion__items">
                <?php foreach( $cards_univer as $item ): ?>
                    <div class="glion__item">
                        <div class="glion__item-pic ">
                            <img src="/img/language_cards/thumbs/<?= $item['LanguageCard']['img'] ?>" alt="">
                        </div>
                        <div class="glion__item-title"><?= $item['LanguageCard']['title'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if( isset($advans) && $advans ): ?>
            <div class="adv-numbers">
                <?php foreach( $advans as $item ): ?>
                    <div class="adv-number">
                        <div class="adv__title"><?= $item['Advan']['title'] ?></div>
                        <p><?= $item['Advan']['body'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php if( isset($cards_campus) && $cards_campus ): ?>
    <section class="section campuses">
        <div class="container">
            <h2 class="title">Кампусы университета Glion</h2>
            <div class="campuses__items">
                <?php foreach( $cards_campus as $item ): ?>
                    <div class="campuses__item">
                        <div class="campuses__item-pic">
                            <img src="/img/language_cards/thumbs/<?= $item['LanguageCard']['img'] ?>" alt="">
                        </div>
                        <div class="campuses__item-title"><?= $item['LanguageCard']['title'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if( $data['GlionLesroche']['residence'] || $data['GlionLesroche']['equipments'] ): ?>
    <section class="section accommodation-sec">
        <div class="container">
            <div class="study__wrapper">
                <div class="study-left">
                    <?php if( $data['GlionLesroche']['residence'] ): ?>
                        <h2 class="title">Проживание</h2>
                        <div class="text">
                            <?= $data['GlionLesroche']['residence'] ?>
                        </div>
                    <?php endif; ?>
                    <?php if( $data['GlionLesroche']['equipments'] ): ?>
                        <h3 class="accommodation-sec-item-title">Оснащение кампусов:</h3>
                        <?= $data['GlionLesroche']['equipments'] ?>
                    <?php endif; ?>
                </div>
                <?php if( $data['GlionLesroche']['requirements'] ): ?>
                <div class="study-right">
                    <h3 class="requirements-title">Требования к поступающим:</h3>
                     <?= $data['GlionLesroche']['requirements'] ?>
                </div>
                <?php endif; ?>
            </div>    
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

                    <input type="hidden" name="page" value="<?= $data['GlionLesroche']['title'] ?>">
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