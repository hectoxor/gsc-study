<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title><?php echo $this->fetch('title'); ?></title>
		<meta name="description" content=""/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="google-site-verification" content="JGiHeng_D0sCzgiklesd4vMgZc_EF_WXPwMOjQXwu7I" />
		<?php 
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cake.generic', 'admin-style.css'));
		echo $this->Html->script(array('ckeditor/ckeditor'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		 ?>
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
                accurateTrackBounce:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/57106423" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <style type="text/css">
        	.admin_tab_list{
				display: flex;
				flex-wrap: wrap;
				margin-bottom: 30px;
				border-bottom: 1px solid #ccc;
			}
			.admin_tab{
				font-size: 16px;
				padding: 7px 15px;
				cursor: pointer;
				background-color: #dedede;
				border: 1px solid #ccc;
				margin-bottom: -1px;
			}
			.admin_tab.active{
				background-color: #fff;
				border-bottom-color: #fff;
			}
			.admin_tab_content{
				display: none;
			}
			.admin_tab_content.active{
				display: block;
			}
			.admin_tab_content h1,
			.admin_tab_content h2{
				font-family: 'Arial';
				border-bottom: none;
				font-weight: bold;
				margin-bottom: 15px;
			}
			.pages{
				text-align: center;
			}
			.pag-bot{
				margin-top: 10px;
				display: flex;
				justify-content: center;
			}
			.pagination{
				display: flex;
				flex-wrap: wrap;
				text-align: center;
			}
        </style>
	</head>
	<body>
		<div class="wrapper">	
			<div class="sidebar">
				<div class="sidebar-top">
					<a href="#" class="sidebar-top__heading">GSC</a>
					<a href="javascript:;" class="close-sidebar"><img src="/img/adminimg/closeadmin.svg" alt=""></a>				
				</div>
				<ul class="menu">
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="javascript:;"><img src="/img/adminimg/edu.png" alt="">Образование за рубежом <img class="arrow-admin" src="/img/adminimg/headarr.svg" alt=""></a>
						<div class="menu__li-children">							
							<a class="menu-item" href="/admin/universities">Учреждения</a>					
							<a class="menu-item" href="/admin/abroad_programs">Образование за рубежом</a>
							<a class="menu-item" href="/admin/secondary_educations">Среднее образование</a>
							<a class="menu-item" href="/admin/higher_educations">Высшее образование</a>
							<a class="menu-item" href="/admin/glion_lesroches">Glion & Les Roches</a>							
							<a class="menu-item" href="/admin/courses">Летние курсы за рубежом</a>	
							<a class="menu-item" href="/admin/countries">Страны</a>
							<a class="menu-item" href="/admin/edu_languages">Языки обучения</a>
						</div>
					</li>
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="javascript:;"><img src="/img/adminimg/school.png" alt="">Языковая школа <img class="arrow-admin" src="/img/adminimg/headarr.svg" alt=""></a>
						<div class="menu__li-children">
							<a class="menu-item" href="/admin/language_schools">Языковая школа</a>
							<a class="menu-item" href="/admin/language_programs">Языковые курсы</a>
						</div>
					</li>										
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/cities"><img src="/img/adminimg/city.png" alt="">Города</a>
					</li>
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/pages"><img src="/img/adminimg/webpages.png" alt="">Страницы</a>
					</li>										
					
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/reviews"><img src="/img/adminimg/rating.png" alt="">Отзывы</a>
					</li>					
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/comps"><img src="/img/adminimg/list.png" alt="">Элементы</a>
					</li>
					<!-- <li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/slides"><img src="/img/adminimg/slider.png" alt="">Слайдер</a>
					</li> -->								
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/contacts"><img src="/img/adminimg/contact.png" alt="">Контакты</a>
					</li>
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/advans"><img src="/img/adminimg/graph.png" alt="">Преимущества</a>
					</li>
					<li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/news"> <img src="/img/adminimg/news.svg" alt="">Новости</a>
					</li>
					<!-- <li class=" menu__li feedback-ico">
						<a class="menu-item" href="/admin/articles"><img src="/img/adminimg/article.png" alt="">Статьи</a>
					</li> -->
					<li class="menu__li feedback-ico">
						<a class="menu-item" href="/admin/users/logout"><img src="/img/adminimg/exit.png" alt="">Выход</a>
					</li>
				</ul>
			</div>
			<div class="content-right">				
				<header class="header">
					<div class="mob-start">
						<span class="menu1"></span>
						<span class="menu2"></span>
						<span class="menu3"></span>
					</div>
					<span class="header__left">Административная панель сайта</span>		
					<a class="header__link" href="/">Перейти на сайт</a>
				</header>
				<div class="content">					
					<?php echo $this->Session->flash('good'); ?>
					<?php echo $this->Session->flash('bad'); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
		<div id="popup" style="width:350px;display: none;">
			<div class="popup">	
				<span class="popup__heading">Обратиться в тех-поддержку</span>
				<div class="popup-row">
					<input class="popup-row__input" placeholder="Ваше Имя" type="text">
				</div>
				<div class="popup-row">
					<input class="popup-row__input" placeholder="Телефон" type="text">
				</div>
				<div class="popup-row">
					<textarea class="popup-row__textarea" placeholder="Сообщение" type="text"></textarea>
				</div>
				<div class="popup__centr">
					<button class="btn" type="submit">Отрпавить</button>
				</div>										
			</div>
		</div>		
		<!--[if lt IE 9]>
		<script src="/libs/html5shiv/es5-shim.min.js"></script>
		<script src="/libs/html5shiv/html5shiv.min.js"></script>
		<script src="/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="/libs/respond/respond.min.js"></script>
		<![endif]-->
		<script src="/js/jquery-3.0.0.min.js"></script>  					
		<script>
			 $('.menu__li--under').on('click', function () {                              
            	if($(this).hasClass('active')){
		            $('this').removeClass('active');            
		        }
		        else{                        
		            $(this).addClass('active');            
		        }               
  			});

			// Admin Tabs

			$('.admin_tab').on("click", function(){
			  var index = $(this).index();

			  if( !$(this).hasClass('active') ){
			    $('.admin_tab.active').removeClass('active');
			    $(this).addClass('active');
			    $('.admin_tab_content.active').removeClass('active');
			    $('.admin_tab_content').eq(index).addClass('active');
			  }
			});

			// Admin Tabs END
		</script>	
		<script src="/js/adminscript.js"></script>	
	</body>
</html>