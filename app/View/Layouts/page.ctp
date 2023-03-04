<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title><?=$title_for_layout?></title>
		<?php if(isset($meta['keywords'])): ?>
            <meta name="keywords" content="<?=$meta['keywords']?>">
        <?php endif; ?>
        <meta name="google-site-verification" content="JGiHeng_D0sCzgiklesd4vMgZc_EF_WXPwMOjQXwu7I" />
        <?php if(isset($meta['description'])): ?>
            <meta name="description" content="<?=$meta['description']?>">
        <?php endif; ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="/favicon.svg" />
        <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="/css/styleNew.css?v=1.5" />
		<link rel="stylesheet" href="/css/slick.css" />
        <?php if(isset($canonical) && !empty($canonical)): ?>
            <link rel="canonical" href="https://gscstudy.kz<?=$canonical?>"/>
        <?php else: ?>
            <link rel="canonical" href="https://gscstudy.kz<?=str_replace(array('?city=nur-sultan', '&city=nur-sultan'), '', $_SERVER['REQUEST_URI'])?>"/>
        <?php endif ?>
        <meta name="yandex-verification" content="c621412cfdb56acc" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156557152-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-156557152-1');
        </script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

           ym(57106423, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/57106423" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body>
        <div class="alert <?=(isset($_SESSION['Message']['good']) || isset($_SESSION['Message']['bad'])) ? 'alert--active' : '';?>">
            <div class="container">
                <?php //var_dump($_SESSION); ?>
                <?php echo $this->Session->flash('good'); ?>
                <?php echo $this->Session->flash('bad'); ?>
                <?php if(isset($_SESSION['Message'])){unset($_SESSION['Message']);} ?>
                <div class="my-alert__close"></div>
            </div>
        </div> 
        <div class="padding-top">
		  <?php echo $this->element('left_sidebar') ?>
        </div>
		<?php echo $this->fetch('content') ?>
        <div id="test" class="hidden-p">
            <div class="request-block">
                <div class="request-title"><span>Оставить заявку</span></div>
                <form class="form" action="#" method="" enctype="">
                    <input class="form_input" type="text" name="name" placeholder="Ваше ФИО" required="">
                    <input class="form_input" type="tel" name="email" placeholder="Ваш номер" required="">
                    <button class="form-btn more-btn" type="submit">Отправить</button>
                </form>
                <div class="request_text">Оставляя сообщение вы соглашаетесь на обработку <a href="#" target="_blank">персональных данных.</a></div>
            </div>
        </div>
        <div id="popup-review">
            <div class="popup-review-wrapper">
                <div class="our-command__item-pic">
                    <img id="dir_img-sec" src="img/PNG/dir.png" alt="">
                </div>
                <div class="popup-review-info">
                    <div class="popup-review-header">
                        <h3 id="dir_name-sec" class="title">алибек шашдавлетов</h3>
                        <p id="dir_position-sec" class="pos">Директор школы английского языка</p>
                    </div>
                    <div class="text" id="dir_body-sec">
                        <p>Высшее образование – <b>бакалавр гуманитарных наук, специальность – Переводческое дело, 2015 г.</b>
                        </p>
                        <!-- <p>Сертификаты <b>TKT by Cambridge Assessment English (Modules 1, 2, 3), 2016 г.</b>
                        </p>
                        <p>
                            Сертификат <b>CELTA Pass B, Англия, 2017 г.</b>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
        <?=$this->element('footer') ?>
		<script src="/js/jquery-3.0.0.min.js"></script>
		<script src="/js/slick.min.js"></script>			
        <script src="/js/jquery.maskedinput.min.js"></script> 
		<script src="/js/jquery.waypoints.min.js"></script>    
		<script src="/js/jquery.fancybox.min.js"></script>
		<script src="/js/script.js?v=1.18"></script>
	</body>
</html>