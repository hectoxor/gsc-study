<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?=$title_for_layout?></title>
        <?php if(isset($meta['keywords'])): ?>
            <meta name="keywords" content="<?=$meta['keywords']?>">
        <?php endif; ?>
        <?php if(isset($meta['description'])): ?>
            <meta name="description" content="<?=$meta['description']?>">
        <?php endif; ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="/favicon.svg" />
        <link rel="stylesheet" href="/css/slick.css" />
        <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="/css/styleNew.css?v=1.6551752" />
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
</div> 
    <body>   
        <?php echo $this->element('left_sidebar') ?>
        <section class="header-bottom">
            <img class="header-bottom__img" src="../img/jpg/banner.jpg">
            <div class="container">
                <div class="header-bottom__wrapper">
                    <h1 class="header-bottom__title way way--active"><?= $slides[0]['Slide']['title'] ?></h1>
                    <div class="subtitle way way--active"><?= $slides[0]['Slide']['body'] ?></div>
                    <a href="javascript:;" data-src="#school" data-fancybox="" class="btn header-bottom-btn way way--active">Оставить заявку</a>
                </div>
            </div>
        </section>
        <section class="section expert">
            <div class="container">
                <div class="expert__wrapper">
                    <div class="experts">
                        <div class="experts-pic">
                            <img src="/img/pic1.jpg" alt="" >
                        </div>
                        <div class="experts__info">
                            <h2 class="title experts__title"><?=$h2?></h2>
                            <?=$seotext?>
                            <a href="javascript:;" data-src="#school" data-fancybox="" class="btn more">Оставить заявку</a>
                        </div>
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
                    <div class="expert__cards way">
                        <div class="expert__card way">
                            <a href="/<?= $lang ?>higher_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="expert__card-pic pic-increase">
                                <img src="/img/jpg/expert1.jpg" alt="">
                            </a>
                            <a href="/<?= $lang ?>higher_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="expert__card-title">Высшее образование</a>
                            <a href="/<?= $lang ?>higher_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="btn more">Подробнее</a>
                        </div>
                        <div class="expert__card way">
                            <a href="/<?= $lang ?>secondary_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="expert__card-pic pic-increase">
                                <img src="/img/jpg/middle_edu1.jpg" alt="">
                            </a>
                            <a href="/<?= $lang ?>secondary_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="expert__card-title">Среднее образование</a>
                            <a href="/<?= $lang ?>secondary_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="btn more">Подробнее</a>
                        </div>
                        <div class="expert__card way">
                            <a href="/<?= $lang ?>abroad-program<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="expert__card-pic pic-increase">
                                <img src="/img/jpg/programs_edu1.jpg" alt="">
                            </a>
                            <a href="/<?= $lang ?>abroad-program<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="expert__card-title">Языковые курсы</a>
                            <a href="/<?= $lang ?>abroad-program<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="btn more">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!--  <?php if( isset($univers) && $univers ): ?>
            <section class="section univers">
                <div class="container">
                    <h2 class="title">Поступайте в лучшие университеты мира</h2>
                    <div class="univers__slider">
                        <?php foreach( $univers as $item ): ?>
                            <div class="univers__slide">
                                <a href="/<?= $lang ?>university/<?= $item['University']['alias'] ?>" class="univers__slide-pic pic-increase">
                                    <img src="/img/universities/thumbs/<?= $item['University']['img'] ?>" alt="">
                                </a>
                                <a href="/<?= $lang ?>university/<?= $item['University']['alias'] ?>" class="univers__slide-title"><?= $item['University']['title'] ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?> -->
        <?php if( isset($news) && $news ): ?>
            <section class="section news">
                <div class="container">
                    <h2 class="title"><?= __('Новости') ?></h2>
                    <div class="news__items way">
                        <?php foreach($news as $item): ?>
                        <div class="news__item">
                            <div class="news-item way-news way--active">
                                <a href="/<?= $lang ?>news/<?=$item['News']['alias']?>" class="news__item-pic pic-increase">
                                    <img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="">
                                </a>                                                        
                                <a class="news__item-title"><?=$item['News']['title']?></a>
                                <p><?= $this->Text->truncate(strip_tags($item['News']['body']), 102, array('ellipsis' => '...', 'exact' => true)) ?></p>
                                <a href="/<?= $lang ?>news/<?=$item['News']['alias']?>" class="moree"><?= __('Читать подробнее') ?></a>                           
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div> 
                    <a href="/<?= $lang ?>news<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>" class="btn more">все новости</a>
                </div>
            </section>
        <?php endif; ?>
        <?php echo $this->element('footer') ?>
        <script src="/js/jquery-3.0.0.min.js"></script>
        <script src="/js/jquery.waypoints.min.js"></script>    
        <script src="/js/jquery.fancybox.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/jquery.maskedinput.min.js"></script>         
        <script src="/js/script.js?v=1.193"></script>    
    </body>
</html>