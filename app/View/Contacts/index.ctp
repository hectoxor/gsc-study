<div class="content">
    <div class="content-top">
        <div class="container">
            <h1 class="title">
                Контакты
            </h1>
            <nav class="page-header-nav">
                <ul>
                    <li class=""><a href="/<?= $lang ?>language-school?city=<?=$current_city?>">О языковой школе</a></li>
                    <li><a href="javascript:;">Языковые курсы</a></li>
                    <li class=""><a href="/<?= $lang ?>test">Онлайн тест</a></li>
                    <li class="active"><a href="/<?= $lang ?>contacts?type=school&city=<?=$current_city?>">Контакты</a></li>
                </ul>
            </nav>
        </div>    
    </div>
	<section class="contacts section">
		<div class="container">
			<div class="cities__wrapper">
                <div class="contacts-body">
                    <div class="tab-contents">
                        <?php foreach( $cities as $index => $city ): ?>
                            <div class="end-items tab-items <?= ($index == 0) ? 'active' : '' ?>">
                                <div class="contacts__items">
                                    <?php foreach( $data as $contact ): ?>
                                        <?php if( $contact['Contact']['city_id'] == $city['City']['id'] ): ?>
                                            <div class="contacts__item">
                                                <div class="contacts__item-info">
                                                    <div class="address"><?= $contact['Contact']['address'] ?></div>
                                                    <?php if( $contact['Contact']['phone1'] ): ?>
                                                        <div class="contacts__item-info-item">
                                                            <a class="soc-icon tel" href="tel:+<?= preg_replace('/[^0-9]/', '', $contact['Contact']['phone1']) ?>"><?= $contact['Contact']['phone1'] ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $contact['Contact']['phone2'] ): ?>
                                                        <div class="contacts__item-info-item">
                                                            <a class="soc-icon tel" href="tel:+<?= preg_replace('/[^0-9]/', '', $contact['Contact']['phone2']) ?>"><?= $contact['Contact']['phone2'] ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $contact['Contact']['email'] ): ?>
                                                        <div class="contacts__item-info-item">
                                                            <p>Электронная почта:</p>
                                                            <a href="mailto:<?= $contact['Contact']['email'] ?>" class="soc-icon email"><?= $contact['Contact']['email'] ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="contacts__item-card">
                                                    <?= $contact['Contact']['map'] ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
			</div>
		</div>
	</section>	
</div>