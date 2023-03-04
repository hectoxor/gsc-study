<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__top">
                <div class="footer__logo logo">
                    <a class="logo-pic" href="/<?= $lang ?>"><img src="/img/SVG/logo-2.svg" alt=""></a>
                    <p>GSC STUDY</p>
                </div>
                <div class="footer--nav">
                    <nav class="footer-nav footer__menu">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">меню</li>
                            <li class="footer-nav__item"><a href="">Образование за рубежом</a></li>
                            <li class="footer-nav__item"><a href="">Языковое обучение</a></li>
                            <li class="footer-nav__item"><a href="">О компании</a></li>
                            <li class="footer-nav__item"><a href="">Новости</a></li>
                            <li class="footer-nav__item"><a href="">Контакты</a></li>
                        </ul>
                    </nav>
                    <nav class="footer-nav footer__menu">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">образование за рубежом</li>
                            <li class="footer-nav__item"><a href="">Языковые программы</a></li>
                            <li class="footer-nav__item"><a href="">Среднее образование</a></li>
                            <li class="footer-nav__item"><a href="">Высшее образование</a></li>
                            <li class="footer-nav__item"><a href="">Glion and Les RochesНовости</a></li>
                            <li class="footer-nav__item"><a href="/<?= $lang ?>courses">Летние каникулы за рубежом</a></li>
                        </ul>
                    </nav>
                    <nav class="footer-nav footer__menu">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">языковая школа</li>
                            <li class="footer-nav__item"><a href="">О языковой школе</a></li>
                            <li class="footer-nav__item"><a href="">Языковые курсы</a></li>
                            <li class="footer-nav__item"><a href="">Онлайн тест</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__rights">© 2022 Частная школа «GSC Study»</div>
                <div class="footer__creators"><a href="https://astanacreative.kz/" target="_blank">Разработка сайтов в Астане</a></div>
            </div>
        </div>
    </div>
</footer>
<div style="display: none;" id="citymoblie">
    <div class="pop-check">
        <span class="popup__heading">Выберите город</span>
        <ul class="pop-city">
            <li><a href="/">Нур-Султан</a></li> 
            <li><a href="/almaty">Алматы</a></li>                                                                   
            <li><a href="/aktau">Актау</a></li>                                                                    
            <li><a href="/pavlodar">Павлодар </a></li>
        </ul>
    </div>
</div>
<div style="display: none;" id="citymoblie">
    <div class="pop-check">
        <span class="popup__heading">Выберите город</span>
        <ul class="pop-city">
            <li><a href="/">Нур-Султан</a></li> 
            <li><a href="/almaty">Алматы</a></li>                                                                   
            <li><a href="/aktau">Актау</a></li>                                                                    
            <li><a href="/pavlodar">Павлодар </a></li>
        </ul>
    </div>
</div>
<div style="display: none;" id="zakazat">
     <form action="/requests/send" method="POST">
        <div class="popup">
            <span class="popup__heading">Заказать звонок</span>
            <div class="popup-row">
                <label>Имя:</label><input type="text" name="name" required>                            
            </div>
            <div class="popup-row">
                <label>Телефон:</label><input type="text" name="phone" required>                            
            </div>
            <div class="popup-row">
                <label>Почта:</label><input type="text" name="mail" required>                            
            </div>
            <div class="popup-row">
                <label>Вопрос:</label><textarea type="text" name="question"></textarea>                            
            </div>
            <?php $r1 = rand(1,10); $r2 = rand(1,10);?>
            <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>
            <input type="hidden" name="page" value="с заказа звонка">
            <input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
            <?php if($this->Session->check('city')): ?>
                <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
            <?php else: ?>
               <input type="hidden" name="city" value="Нур-Султан"> 
            <?php endif ?>
            <button class="btn" type="submit">Отправить</button>
        </div>
    </form>
</div>
<div style="display: none;" id="otzyv">
    <div class="popup">
        <span class="popup__heading">Оставить отзыв</span>
        <div class="popup-row">
            <label>Имя:</label><input type="text" required>                        
        </div>
        <div class="popup-row">
            <label>Отзыв:</label><textarea required></textarea>                        
        </div>
        <div class="popup-row">
            <div class="input-file">
                <input id="file-otzyv" name="file-otzyv" type="file"><label for="file-otzyv">Выберите фотографию</label>                            
            </div>    
        </div>
        <button class="btn" type="submit">Отправить</button>
    </div>
</div>
<div id="type-popup" class="hidden-p">
    <div class="popup">
       <span class="popup__heading">Оставить заявку</span>
       <div class="type-popup">
           <a href="javascript:;" data-src="#school" data-fancybox="" class="type-popup__item">
               <div class="type-popup__img">
                   <img src="/img/svg/popup-abroad.svg">
               </div>
               <span class="type-popup__name">Образование за рубежом</span>
           </a>
           <a href="javascript:;" data-src="#abroad" data-fancybox="images" fancybox="" class="type-popup__item">
                <div class="type-popup__img">
                   <img src="/img/svg/popup-school.svg">
               </div>
               <span class="type-popup__name">Языковая<br> школа</span>
           </a>
       </div>
    </div>
</div>
<div id="school" class="hidden-p">
    <div class="request-block">
        <div class="request-title"><span>Образование за рубежом</span></div>
        <form class="form" action="/requests/send" method="POST" enctype="">
            <input class="form_input" type="text" name="name" placeholder="Ваше ФИО" required="">
            <input class="form_input" type="tel" name="phone" placeholder="Ваш номер" required="">
            <textarea placeholder="Ваши пожелания" class="form_textarea" name="note"></textarea>
            <div class="form-select">
                <span class="form-select__heading">Бакалавриат</span>
                <ul class="form-select-area">
                    <li class="js-type-study">Бакалавриат</li>
                    <li class="js-type-study">Магистратура</li>
                    <li class="js-type-study">Языковые курсы</li>
                    <li class="js-type-study">Летние каникулы за рубежом</li>
                </ul>    
            </div>

            <input type="hidden" class="js-input-type" name="custom_edu_type" value="Бакалавриат">

            <input type="hidden" name="page" value="с заказа звонка">

            <?php $r1 = rand(1,10); $r2 = rand(1,10);?>
            <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>
            <!-- <input name="data[r1]" value="<?=$r1?>"  type="hidden">
            <input name="data[r2]" value="<?=$r2?>"  type="hidden">
            <input class="form_input" name="data[robot]" placeholder="Сколько будет <?=$r1?> + <?=$r2?>?" type="text" required> -->

            <?php if($this->Session->check('city')): ?>
                <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
            <?php else: ?>
               <input type="hidden" name="city" value="Нур-Султан"> 
            <?php endif ?>

            <button class="form-btn more-btn" type="submit">Отправить</button>
        </form>
        <div class="request_text">Оставляя сообщение вы соглашаетесь на обработку 
        <a href="javascript:;" target="_blank">персональных данных.</a></div>
    </div>
</div>
<div id="abroad" class="hidden-p">
    <div class="request-block">
        <div class="request-title"><span>Языковая школа</span></div>
        <form class="form" action="/requests/send" method="POST" enctype="">
            <input class="form_input" type="text" name="name" placeholder="Ваше ФИО" required="">
            <input class="form_input" type="tel" name="phone" placeholder="Ваш номер" required="">

            <input type="hidden" name="page" value="с заказа звонка">
            
            <?php $r1 = rand(1,10); $r2 = rand(1,10);?>
            <!-- <input name="data[r1]" value="<?=$r1?>"  type="hidden">
            <input name="data[r2]" value="<?=$r2?>"  type="hidden">
            <input class="form_input" name="data[robot]" placeholder="Сколько будет <?=$r1?> + <?=$r2?>?" type="text" required> -->

            <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>

            <?php if($this->Session->check('city')): ?>
                <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
            <?php else: ?>
               <input type="hidden" name="city" value="Нур-Султан"> 
            <?php endif ?>

            <button class="form-btn more-btn" type="submit">Отправить</button>
        </form>
        <div class="request_text">Оставляя сообщение вы соглашаетесь на обработку 
        <a href="javascript:;" target="_blank">персональных данных.</a></div>
    </div>
</div>