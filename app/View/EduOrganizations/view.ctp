<div class="content second-page">
	<div class="content-top">
		<div class="container">
			<ul class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/<?= $lang ?>">Главная</a>
				</li>
				<li class="breadcrumb-item">
					<a href="/<?= $lang ?>">Обучение за рубежом</a>
				</li>
				<li>
					<span>Высшее образование за рубежом</span>
				</li>
			</ul>
			<nav class="page-header-nav">
	            <ul>
	                <li class="<?= ($data['EduOrganization']['type'] == 'kurs') ? 'active' : '' ?>"><a href="/<?= $lang ?>abroad-program?city=<?= $current_city ?>">Языковые курсы за рубежом</a></li>
	                <li class=""><a href="/<?= $lang ?>secondary_educations?city=<?= $current_city ?>">Среднее образование</a></li>
	                <li class=""><a href="/<?= $lang ?>higher_educations?city=<?= $current_city ?>">Высшее образование</a></li>
	                <li class=""><a href="/<?= $lang ?>glion_lesroches">Glion and Roches</a></li>
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
                           <?=($data['EduOrganization']['title']) ? $data['EduOrganization']['title'] : $data['EduOrganization']['title']?>
                        </h1>
                        <div class="lang-courses__item-texts">
                            <?php if( $data['Country']['title'] ): ?>
                                <p>Страна: <span><?= $data['Country']['title'] ?></span></p>
                            <?php endif; ?>
                            <?php if( $data['EduOrganization']['city_name'] ): ?>
                                <p>Город: <span><?= $data['EduOrganization']['city_name'] ?></span></p>
                            <?php endif; ?>
                            <?php if( $data['EduOrganization']['price'] ): ?>
                                <p>Стоимость: <span><?=$data['EduOrganization']['price']?></span></p>
                            <?php endif; ?>
                            <?php if( $data['EduOrganization']['program'] ): ?>
                                <p>Форма обучения: <span><?=$data['EduOrganization']['program']?></span></p>                           
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="javascript:;" class="lang-courses__item-pic pic-increase">
                        <img src="/img/edu_organizations/<?= $data['EduOrganization']['img'] ?>" alt="">
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
        
                <?php if( $data['EduOrganization']['body'] ): ?>
                    <div class="about-univer">
                        
                        <?php if( $data['EduOrganization']['body_title'] ): ?>
                            <h2 class="title"><?= $data['EduOrganization']['body_title'] ?></h2>
                        <?php else: ?>
                            <h2 class="title">Об учреждении</h2>
                        <?php endif; ?>

                        <div class="text">
                            <?= $data['EduOrganization']['body'] ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( $data['EduOrganization']['body_edu'] ): ?>
                    <div class="study">
                        <h2 class="title"><?= $data['EduOrganization']['body_edu_title'] ?></h2>
                        <div class="study__wrapper">
                            <div class="study-left">
                                <?= $data['EduOrganization']['body_edu'] ?>
                            </div>
                            <?php if( isset($data['EduOrganization']['body_program']) && $data['EduOrganization']['body_program'] ): ?>
                                <div class="study-right">
                                    <div class="text">
                                        <?= $data['EduOrganization']['body_program'] ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="sect sect-edu">
                <div class="container">
                    <?php if( $data['EduOrganization']['residence'] ): ?>
                    <div class="accommodation">
                        <div class="lang-courses__item">
                            <div class="lang-courses__item-info">
                                <h2 class="title">Проживание</h2>
                                <div class="lang-courses__item-texts">
                                    <?= $data['EduOrganization']['residence'] ?>
                                </div>
                            </div>
                            <a href="javascript:;" class="lang-courses__item-pic pic-increase" data-fancybox data-src="https://www.youtube.com/embed/<?= $data['EduOrganization']['residence_youtube'] ?>">
                                <?php if( $data['EduOrganization']['residence_img'] ): ?>
                                    <img src="/img/edu_organizations/<?= $data['EduOrganization']['residence_img'] ?>" alt="">
                                <?php else: ?>
                                    <iframe src="<?= $data['EduOrganization']['residence_youtube'] ?>" width="100%" height="100%"></iframe>
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
                <h2 class="title">подберем для вас учебное заведение!</h2>
                <div class="request">
                    <form class="form" action="/requests/send" method="POST">
                        <div class="input-parent">
                            <input class="form_input" type="text" name="name" placeholder="Фамилия Имя Отчество" required="">
                            <input class="form_input" type="email" name="mail" placeholder="Электронная почта" required="">
                            <input class="form_input" type="tel" name="phone" placeholder="Номер телефона" required="">

                            <input type="hidden" name="page" value="<?= $data['EduOrganization']['title']?>а">
                            <input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
                            <?php if($this->Session->check('city')): ?>
                                <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
                            <?php else: ?>
                               <input type="hidden" name="city" value="Нур-Султан"> 
                            <?php endif ?>
                        </div>
                        <button class="btn more" type="submit">оставить заявку</button>
                    </form>
                </div>
            </div>
        </section>
</div>
<style>
    h2 {
        font-family: 'Merriweather';
        font-size: 18px;
        display: block;
        margin-bottom: 20px;
        line-height: 1.6;
    }
</style>