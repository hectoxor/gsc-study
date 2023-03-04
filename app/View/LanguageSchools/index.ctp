<div class="content">
	<div class="content-top">
		<div class="container">
			<h1 class="title">
				Языковая школа «global student center»
			</h1>
			<nav class="page-header-nav">
	            <ul>
	                <li class="active"><a href="javascript:;">О языковой школе</a></li>
                    <li class=""><a href="/<?= $lang ?>language-programs?city=<?=$current_city?>">Языковые курсы</a></li>
                    <li class=""><a href="/<?= $lang ?>test">Онлайн тест</a></li>
                    <li class=""><a href="/<?= $lang ?>contacts?type=school&city=<?=$current_city?>">Контакты</a></li>
	            </ul>
	        </nav>
	    </div>    
	</div>
	<section class="section lang-school">
        <div class="container">
            <div class="video" data-src="https://www.youtube.com/embed/<?= $data['LanguageSchool']['youtube'] ?>">
                <img src="/img/jpg/video.jpg" alt="">
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
        </div>
    </section>

    <?php if( isset($teams) && $teams ): ?>
        <section class="section our-command">
            <div class="container">
                <h2 class="title">наша команда</h2>
                <div class="our-command__items">
                    <?php foreach( $teams as $item ): ?>
                        <div class="our-command__item">
                            <a href="javascript:;" data-src="#popup-comand" data-fancybox class="our-command__item-pic popup-comand">
                                <img src="/img/teams/<?= $item['Team']['img'] ?>" alt="">
                                <div class="position"><?= $item['Team']['short_position'] ?></div>
                            </a>
                            <a href="javascript:;" data-src="#popup-comand" data-fancybox class="our-command__item-title popup-comand"><?= $item['Team']['title'] ?></a>
                            <p class="our-command__item-subtitle"><?= $item['Team']['position'] ?></p>
                            <a href="javascript:;" data-src="#popup-comand" data-fancybox class="moree popup-comand">Читать подробнее</a>
                            <div class="dir_body text">
                                <?= $item['Team']['body'] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>
    <div id="popup-comand" style="display:none;">
        <div class="popap__item">
            <div class="popap__image">
                <img id="dir_img" src="/img/teams/a52264148e3bf0139ac719299463a6f3.png" alt="">
            </div>
            <div class="popap__block">
                <div class="popap__name popap-name">
                    <div id="dir_name" class="popap-name__title">
                        алибек шашдавлетов
                    </div>
                    <div id="dir_position"class="popap__subtitle">
                        Директор школы английского языка
                    </div>
                </div>
                <div id="dir_body" class="popap__certificates popap-certificates">
                    <div class="popap-certificates__text">
                        Высшее образование – <span>бакалавр гуманитарных наук, специальность – Переводческое дело, 2015 г.</span>
                    </div>
                    <div class="popap-certificates__text">
                        Сертификаты <span>TKT by Cambridge Assessment English (Modules 1, 2, 3), 2016 г.</span>
                    </div>
                    <div class="popap-certificates__text">
                        Сертификат <span>CELTA Pass B, Англия, 2017 г.</span>
                    </div>
                    <div class="popap-certificates__text">
                        Сертификат <span>Teaching IELTS, 2019 г.</span>
                    </div>
                    <div class="popap-certificates__text">
                        Курс <span>Dip-TESOL</span>, в настоящее время
                    </div>
                    <div class="popap-certificates__text">
                        Алибек работает с корпоративными клиентами, такими как <span>BI Group</span>, <span>Инвестиционный Фонд Казахстана</span>, а также обучил за это время сотрудников следующих организаций: <span>ресторан Selfie Astana, Самрук Контракт, НИШ Астана.</span>
                    </div>
                    <div class="popap-certificates__text">
                        Алибек ведет курсы по <span>General English, Business English, IELTS Preparation.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>