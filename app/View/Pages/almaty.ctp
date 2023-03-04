<div class="content">
           
            <div class="section">
                <div class="container">
                    <div class="section__heading">
                    	<h1>Образование за рубежом Алматы</h1>
                    	<img src="/img/almaty.jpg" alt="Образовательный центр в Алматы">
                    </div>
                    
                </div>      
            </div>
           
           
            
           
            <div class="section section--notop">
                <div class="container">
                    <h2 class="section__heading">Обучение за рубежом из Алматы</h2>
                    <div class="seo-text">
	                    <p>Образование за рубежом Алматы – одна из главных услуг центра GSC. Обучение за рубежом открывает большие возможности для казахстанский подростков. Нами подобраны самые топовые и престижные учебные заведения, находящиеся за границей. Фундаментальное образование за рубежом можно получить в таких странах, как: США, Канада, Великобритания, Швейцария, Чехия, Испания, Франция, Италия и многие другие. Основной задачей обучения за рубежом является увеличение числа образованных специалистов. Учеба за границей открывает двери новым возможностям реализации себя и своей карьеры. </p>
                        <p>Чтобы получить образование за рубежом из Алматы нужно владеть необходимым уровнем языков. Поэтому образовательный центр в Алматы – GSC предлагает свою программу подготовки для обучения за рубежом. Мы – центр, не только консультирующий в вопросах образования за границей, но и предоставляющий услуги языковых курсов. </p>  
                        <p>Образовательный центр в Алматы – GSC является языковой школой и образовательно-консультирующим центром, имеющий филиалы и в других крупных городах, как: Астана (Нур-Султан), Караганда, Актау, Павлодар. Наш огромный опыт, большой профессиональный состав поможет каждому казахстанцу в поступлении за границу. Мы – профессионалы своего дела, именно поэтому нас выбирают большой процент казахстанцев. У нас в рекомендациях самые топовые университеты, школы и страны с высоким уровнем жизни. </p>
                        <p>Большее количество казахстанских студентов поступили на учебу за рубежом с помощью нас, и более десятки тысяч прошли языковые курсы нашего центра. И если у вас остались еще вопросы, то вам обязательно нужно связать с нами по номерам в разделе «Контакты». Мы поможем вам развеять страхи и поступить в самые лучшие вузы мира. </p> 

						<p style="text-align:center">Дополнительно для вас:</p>
						<ul>
                            <li><a href="/language-program/kursy-angliyiskogo-yazyka-dlya-vzroslykh?city=almaty">Курсы английского языка в Алматы</a></li> 
                            <li><a href="/language-program/podgotovka-k-ielts?city=almaty">Подготовка к IELTS Алматы</a></li> 
                            <li><a href="/magistracy?city=almaty">Языковые курсы за рубежом</a></li> 
                            <li><a href="/country/spain?type=vuz">Обучение в Испании</a></li> 
                            <li><a href="/country/united-kingdom?type=vuz">Образование в Великобритании</a></li> 
                            <li><a href="/country/switzerland?type=vuz">Обучение в Швейцарии</a></li> 
                            <li><a href="/language-programs?city=almaty">Языковые курсы в Алматы</a></li>
                                                        <li><a href="/country/usa?type=vuz">Обучение в США Алматы</a></li>
                        </ul>       			
					</div>
					<div class="share" style="margin-top:15px">
						<span class="share__heading">Поделиться:</span>
						<div class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
					</div>
                </div>
            </div>        
            <footer class="footer">
                <div class="container">
                    <span class="footer__left">© 2020 Частная школа «GSC Study»</span>
                    <a class="created" title="Разработка сайта" target="_blank" href="https://astanacreative.kz">Сайт разработан в <span>AstanaCreative.kz</span></a>
                </div>
            </footer>
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
        </div>