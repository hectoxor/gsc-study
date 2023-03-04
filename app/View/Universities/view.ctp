<div class="content second-page">
	<div class="content-top">
		<div class="container">
			<nav class="page-header-nav">
	            <ul>
	                <li class="<?= ($data['University']['type'] == 'kurs') ? 'active' : '' ?>"><a href="/<?= $lang ?>abroad-program?city=<?= $current_city ?>">Языковые курсы за рубежом</a></li>
	                <li class="<?= ($data['University']['type'] == 'srednee') ? 'active' : '' ?>"><a href="/<?= $lang ?>secondary_educations?city=<?= $current_city ?>">Среднее образование</a></li>
	                <li class="<?= ($data['University']['type'] == 'visshee') ? 'active' : '' ?>"><a href="/<?= $lang ?>higher_educations?city=<?= $current_city ?>">Высшее образование</a></li>
	                <li class=""><a href="/<?= $lang ?>glion_lesroches?type=glion<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Glion</a></li>
                    <li class=""><a href="/<?= $lang ?>glion_lesroches?type=les_roches<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Les Roches</a></li>
	                <li class=""><a href="/<?= $lang ?>page/letnie-kursy-za-rubezhom">Летние каникулы за рубежом</a></li>
	            </ul>
	        </nav>
	    </div>    
	</div>
	<section class="section secondary-education-view">
            <div class="container">
                <div class="lang-courses__item">
                    <div class="lang-courses__item-info">
                        <h1 class="title">
                           <?=($data['University']['title']) ? $data['University']['title'] : $data['University']['title']?>
                        </h1>
                        <div class="lang-courses__item-texts">
                            <?php if( $data['Country']['title'] ): ?>
                                <p>Страна: <span><?= $data['Country']['title'] ?></span></p>
                            <?php endif; ?>
                            <?php if( $data['University']['city_name'] ): ?>
                                <p>Город: <span><?= $data['University']['city_name'] ?></span></p>
                            <?php endif; ?>
                            <?php if( $data['University']['price'] ): ?>
                                <p>Стоимость: <span><?=$data['University']['price']?></span></p>
                            <?php endif; ?>
                            <?= $data['University']['program'] ?>
                        </div>
                    </div>
                    <a href="javascript:;" class="lang-courses__item-pic pic-increase">
                        <img src="/img/universities/<?= $data['University']['img'] ?>" alt="">
                    </a>
                </div>
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
                <?php if( $data['University']['body'] ): ?>
                    <div class="about-univer">
                        <!-- <?php if( isset($data['University']['body_title']) ): ?>
                            <?php if( $data['University']['body_title'] ): ?>
                                <h2 class="title"><?= $data['University']['body_title'] ?></h2>
                            <?php else: ?>
                                <h2 class="title">Об учреждении</h2>
                            <?php endif; ?>
                        <?php endif; ?> -->
                        <div class="text">
                            <?= $data['University']['body'] ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( $data['University']['body_edu'] ): ?>
                    <div class="study">
                        <!-- <h2 class="title"><?= ( isset($data['University']['body_edu_title']) ) ? $data['University']['body_edu_title'] : '' ?></h2> -->
                        <div class="study__wrapper">
                            <div class="study-left">
                                <div class="text">
                                    <?= $data['University']['body_edu'] ?>
                                </div>    
                            </div>
                            <?php if( isset($data['University']['body_program']) && $data['University']['body_program'] ): ?>
                                <div class="study-right">
                                    <div class="text">
                                        <?= $data['University']['body_program'] ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- <?php if( $data['University']['body_program'] ): ?>
                    <div class="study">
                        <h2 class="title">Программы</h2>
                        <div class="study__wrapper">
                            <div class="study-left">
                                <?= $data['University']['body_program'] ?>
                            </div>
                            <?php if( isset($program_card) && $program_card ): ?>
                                <div class="study-right">
                                    <div class="text">
                                        <?= $program_card[0]['LanguageCard']['body'] ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?> -->

                <!-- <?php if( $data['University']['body_edu_program'] ): ?>
                    <div class="study">
                        <h2 class="title">Программа обучения</h2>
                        <div><?= $data['University']['body_edu_program'] ?></div>
                    </div>
                <?php endif; ?> -->
            </div>
            <div class="sect sect-edu">
                <div class="container">
                    <?php if( $data['University']['residence'] ): ?>
                    <div class="accommodation">
                        <div class="lang-courses__item">
                            <div class="lang-courses__item-info">
                                <div class="text">
                                    <h2 class="title">Проживание</h2>
                                    <div class="lang-courses__item-texts">
                                        <?= $data['University']['residence'] ?>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:;" class="lang-courses__item-pic pic-increase" data-fancybox data-src="https://www.youtube.com/embed/<?= $data['University']['youtube'] ?>">
                                <?php if( $data['University']['residence_img'] ): ?>
                                    <img src="/img/universities/<?= $data['University']['residence_img'] ?>" alt="">
                                <?php else: ?>
                                    <iframe src="<?= $data['University']['youtube'] ?>" width="100%" height="100%"></iframe>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>    
        </section>
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

                            <input type="hidden" name="page" value="<?=($data['University']['title']) ? $data['University']['title'] : $data['University']['title']?>а">
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
</div>