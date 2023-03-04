<header class="header">
    <div class="header__top <?= ($this->request->params['controller'] == 'pages' && $this->request->params['action'] == 'index') ? '' : 'header_active' ?> header__top-in">
        <div class="container">
            <div class="header__top-wrapper">
                <div class="header-left">
                    <div class="cities nav__item under">
                        <a class="cities_choice js-slide" href="javascript:;">
                            <?php if($this->Session->check('city')): ?>
                                <?=$this->Common->get_city($this->Session->read('city'))?>
                            <?php else: ?>
                                Нур-Султан
                            <?php endif ?>                            
                        </a>
                        <div class="under-part" >
                            <ul class="under-ul">
                                <?php if($this->params['controller'] == 'pages' && $this->action == 'index'): //если главная страница ?> 
                                    <?php foreach($cities as $item): ?>
                                        <?php if($this->Session->check('city') && $this->Session->read('city') != $item['City']['alias']): ?>
                                            <li ><a href="/<?= $lang ?><?= ($item['City']['alias'] == 'nur-sultan') ? '' : $item['City']['alias'] ?>"><?=$item['City']['title']?></a></li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <?php foreach($cities as $item): ?>

                                        <?php if($this->Session->check('city') && $this->Session->read('city') != $item['City']['alias']): ?>
                                            <li ><a href="?city=<?=$item['City']['alias']?>"><?=$item['City']['title']?></a></li>
                                        
                                        <?php endif ?>
                                    <?php endforeach ?>
                                    
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                    <div class="lang_block">
                        <li class="nav__item under">
                            <a class="lang_choice js-slide" href="javascript:;"><?= $l ?></a>
                            <div class="under-part" >
                                <ul class="under-ul">
                                    <li class="">
                                        <a href="/">ru</a>
                                    </li>
                                    <li>
                                        <a href="/kz">kz</a>
                                    </li>
                                    <li>
                                        <a href="/en">En</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>
                </div>
                <div class="nav">
                    <ul class="nav__items">
                        <li class="nav__item under icon app">
                            <a href="javascript:;" class="js-slide">Образование за рубежом</a>
                            <div class="under-part" >
                                <ul class="under-ul">
                                    <li class="">
                                        <a href="/<?= $lang ?>abroad-program<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Языковые курсы</a>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>secondary_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Среднее образование</a>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>higher_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Высшее образование</a>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>glion_lesroches?type=glion">Glion</a>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>glion_lesroches?type=les_roches">Les Roches</a>
                                    </li>
                                    <li <?=(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]== 'letnie-kursy-za-rubezhom') ? 'class="active"' : '' ?>>
                                        <a href="/<?= $lang ?>courses">Летние каникулы за рубежом</a>                               
                                    </li>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>contacts?city=<?=$current_city?>&type=education">Контакты</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav__item">
                            <a href="/<?= $lang ?>" class="logo logo__header">
                                <img src="/img/SVG/logo.svg" alt="logo" class="logo-icon"></a>
                            </a>
                        </li>
                        <li class="nav__item under icon pre">
                            <a href="javascript:;" class="js-slide">Языковая школа</a>
                            <div class="under-part">
                                <ul class="under-ul">
                                    <li class="under <?=($this->params['controller'] == 'language_schools') ? 'active' : '' ?>">
                                        <a href="/<?= $lang ?>language-school<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Языковая школа</a>
                                    </li>
                                    <li class="under <?=($this->params['controller'] == 'language_programs') ? 'active' : '' ?>">
                                        <a href="/<?= $lang ?>language-programs<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Языковые курсы</a>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>test">Онлайн тест</a>
                                    </li>
                                    <li>
                                        <a href="/<?= $lang ?>contacts?city=<?=$current_city?>&type=school">Контакты</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <a href="javascript:;" data-src="#type-popup" data-fancybox="" class="header__top-btn">Oставить заявку</a>
                    <div class="burger">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <a href="javascript:;" class="close header-close">
                    <img src="/img/SVG/close.svg" alt="">
                </a>
                <div class="footer__logo">
                    <a class="logo-pic" href="/<?= $lang ?>"><img src="/img/SVG/logo-2.svg" alt=""></a>
                    <p>GLOBAL STUDENT CENTER</p>                        
                </div>
                <ul class="menu">
                    <li><a href="/<?= $lang ?>"><?= __('Главная') ?></a></li>
                    <li class="under-m">
                        <span>Образование за рубежом</span>
                        <div class="under-part">
                            <ul class="menu-list">
                                <li class="">
                                    <a href="/abroad-program?city=nur-sultan">Языковые курсы</a>
                                </li>
                                <li>
                                    <a href="/secondary_educations?city=nur-sultan">Среднее образование</a>
                                </li>
                                <li>
                                    <a href="/higher_educations?city=nur-sultan">Высшее образование</a>
                                </li>
                                <li>
                                    <a href="/glion_lesroches?type=glion">Glion</a>
                                </li>
                                <li>
                                    <a href="/glion_lesroches?type=les_roches">Les Roches</a>
                                </li>
                                <li>
                                    <a href="/courses">Летние каникулы за рубежом</a>                               
                                </li>
                                
                                <li>
                                    <a href="/contacts?city=nur-sultan&amp;type=education">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="under-m">
                        <span href="/<?= $lang ?>language-school<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Языковая школа</span>
                        <div class="under-part">
                            <ul class="menu-list">
                                <li class="under ">
                                    <a href="/language-school?city=nur-sultan">Языковая школа</a>
                                </li>
                                <li class="under ">
                                    <a href="/language-programs?city=nur-sultan">Языковые курсы</a>
                                </li>
                                <li>
                                    <a href="/test">Онлайн тест</a>
                                </li>
                                <li>
                                    <a href="/contacts?city=nur-sultan&amp;type=school">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li <?=(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]== 'about') ? 'class="active"' : '' ?>>
                        <a href="/<?= $lang ?>page/about">О компании</a></li>
                    <li <?=($this->params['controller'] == 'news') ? 'class="active"' : '' ?>>
                        <a href="/<?= $lang ?>news<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Новости</a>
                    </li>
                    <li>
                        <a href="/<?= $lang ?>reviews?city=<?= $current_city ?>">Отзывы</a>
                    </li>
                    <li><a href="/<?= $lang ?>contacts?city=<?=$current_city?>&type=filial">Контакты</a></li>
                </ul>
                <div class="social-networks">
                    <p>Мы в социальных сетях:</p>
                    <a class="insta" href=""></a>
                    <a class="facebook" href=""></a>
                    <a class="youtube" href=""></a>
                    <a class="twitter" href=""></a>
                </div>
                <span class="header-menu__close header-close"></span>
            </div>
        </div>
    </div>
    </div>
</header>