<div class="content">
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
	<section class="section lang-courses">
        <div class="container">
            <div class="lang-courses__items">
                <?php foreach($data as $item): ?>
	                <div data-priority="<?=$item['LanguageProgram']['priority']?>" class="lang-courses__item">
	                    <div class="lang-courses__item-info">
	                        <h2 class="title">
	                            <?=$item['LanguageProgram']['title']?>
	                        </h2>
	                        <p class="lang-courses__item-texts">
	                            <?= mb_substr(strip_tags($item['LanguageProgram']['body']), 0, 200) . (( mb_strlen(strip_tags($item['LanguageProgram']['body'])) > 200 ) ? '...' : '')  ?>
	                        </p>
	                        <a href="/language-program/<?=$item['LanguageProgram']['alias']?>?city=<?=$current_city?>" class="btn more">Подробнее</a>
	                    </div>
	                    <a href="/language-program/<?=$item['LanguageProgram']['alias']?>?city=<?=$current_city?>" class="lang-courses__item-pic pic-increase">
	                        <img src="/img/language_programs/<?=$item['LanguageProgram']['img']?>" class="card-item__img" alt="">
	                    </a>
	                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>
