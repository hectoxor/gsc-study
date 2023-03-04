<div class="container">
    <div class="index-block padding-block" >
        <div class="index-block__img">
            <div class="index-block-slider">
                <div class="index-block-slider__item">
                   <img src="/img/gallery.png" alt="">
                </div>
                <div class="index-block-slider__item">
                   <img src="/img/gallery.png" alt="">
                </div>
                <div class="index-block-slider__item">
                   <img src="/img/gallery.png" alt="">
                </div>
                <div class="index-block-slider__item">
                   <img src="/img/learn-img.png" alt="">
                </div>
            </div>
        </div>
        <div class="index-block-right">
            <div class="index-block__title">
                <?=$comps[6]['Comp']['body']?>
            </div>
            <div class="index-block__des">
                <?=$comps[7]['Comp']['body']?>
            </div>
            <a href="#" class="btn" data-src="#hidden-content" data-fancybox>
                Записаться
            </a>
        </div>
    </div>
</div>
<div class="index-about-block-container padding-block">
    <div class="container">
        <div class="index-about-block">
            <div class="index-about-block__text">
                <div class="index-about-block-small-title">
                    <?=$comps[11]['Comp']['body']?>
                </div>
                <div class="title">
                    <?=$comps[12]['Comp']['body']?>
                </div>
                <?=$comps[13]['Comp']['body']?>
                <a href="#" class="btn" data-src="#hidden-content" data-fancybox>
                    Записаться
                </a>
            </div>
            <div class="index-about-img">
                <img src="/img/index-about-img.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="mission-block padding-block">
    <div class="container">
        <?=$comps[14]['Comp']['body']?>
    </div>
</div>
<div class="curse-block padding-block">
    <div class="container">
        <div class="title middle-text">
            Наши курсы
        </div>
        <div class="small-title middle-text mb">
            <?=$comps[15]['Comp']['body']?>
        </div>
        <ul class="curse-list">
        <?php foreach($courses as $item): ?>
            <li >
                <div class="curse-item way">
                    <div class="curse-item__img">
                        <a href="/courses/view/<?=$item['Course']['alias']?>">
                        <img src="/img/courses/thumbs/<?=$item['Course']['img']?>" alt="<?=$item['Course']['title']?>">
                        </a>
                    </div>
                    <div class="curse-item__right">
                        <a href="/courses/view/<?=$item['Course']['alias']?>" class="curse-item__title">
                            <?=$item['Course']['title']?>
                        </a>
                        <p>
                            <?= $this->Text->truncate(strip_tags($item['Course']['body']), 80, array('ellipsis' => '...', 'exact' => true)) ?>
                        </p>
                        <a href="/courses/view/<?=$item['Course']['alias']?>" class="read-more">
                            Подробнее
                        </a>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
        <div class="middle-text">
        <a href="#" class="btn" data-src="#hidden-content" data-fancybox>
            Записаться
        </a>
        </div>
    </div>
</div>

<div class="project-block padding-block">
    <div class="container">
        <div class="title middle-text project-title">
            <?=$comps[17]['Comp']['body']?>
        </div>
        <div class="project-cifra-block">
            <?=$comps[18]['Comp']['body']?>
        </div>
        
    </div>
</div>
<div class="project-block padding-block">
    <div class="container">
        <div class="title middle-text ">
            Галерея
        </div>
        <ul class="gallery-list">
            <?php foreach($photos as $item): ?>
            <li >
                <div class="gallery-item">
                <?php if(isset($item['Gallery'][0]['img']) && !empty($item['Gallery'][0]['img'])): ?>
                    <a class="gallery-item__img" href="/albums/view/<?=$item['Album']['id']?>">
                        <img src="/img/gallery/thumbs/<?=$item['Gallery'][0]['img']?>" alt="<?=$item['Picture']['title']?>">
                    </a>
                <?php endif ?>
                    <a class="gallery-item__text"  href="/albums/view/<?=$item['Album']['id']?>">
                            <?=$item['Album']['title']?>
                    </a>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>        
<div class="index-form padding-block">
    <div class="container">
        <form action="/requests" method="POST" class="form">
            <div class="form-title">
                Запишитесь на бесплатную консультацию
            </div>
            <input type="text" class="form-input js-name" name="data[Request][name]" placeholder="Ваше имя">
            <input type="text" class="form-input phone-mask js-phone" required="required" name="data[Request][phone]" placeholder="Номер телефона">
            <input type="text" class="form-input js-mail" equired="required" name="data[Request][email]" placeholder="Почта">
            <button class="btn js-btn" type="submit">Записаться</button>
        </form>
    </div>
</div>
<div class="index-rewview padding-block">
    <div class="container">
        <div class="slider-img-container">
            <div class="rewview-img-slider">
            <?php foreach($reviews as $item): ?>
                <div class="rewview-img-slider__item">
                    <img src="/img/reviews/thumbs/<?=$item['Review']['img']?>" alt="<?=$item['Review']['title']?>">
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="rewview-text-slider">
        <?php foreach($reviews as $item): ?>
            <div class="rewview-text-slider__item">
                <div class="rewview-name">
                    <?=$item['Review']['title']?>
                </div>
                <p>
                    <?=$item['Review']['body']?>
                </p>
            </div>
            <?php endforeach ?>
        </div>
        <a href="#" class="btn" data-src="#hidden-content-review" data-fancybox>
            Оставить отзыв
        </a>
    </div>
</div>
<div class="index-news">
    <div class="container">
        <div class="title middle-text">
            Наши новости
        </div>
        <div class="small-title middle-text mb">
            <?=$comps[16]['Comp']['body']?>
        </div>
        <ul class="news-list">
        <?php foreach($news as $item): ?>
            <li>
                <div class="news-item">
                    <a href="/news/<?=$item['News']['alias']?>" class="news-item__img">
                        <img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="<?=$item['News']['title']?>">
                    </a>
                    <div class="news-item__content">
                        <a href="/news/<?=$item['News']['alias']?>" class="news-item__title">
                            <?=$item['News']['title']?>
                        </a>
                        <div class="news-item__date">
                            <?=$this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?>
                        </div>
                        <a href="/news/<?=$item['News']['alias']?>" class="read-more">
                            Подробнее
                        </a>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
        <div class="middle-text">
            <a href="/news" class="btn">
                Все новости
            </a>
        </div>        
    </div>
</div>