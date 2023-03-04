<div class="content">
           
            <div class="section">
                <div class="container">
                    <div class="section__heading">
                    	<h1>Образовательный центр GSC в Павлодаре</h1>
                    	<img src="/img/pavlodar.jpg" alt="Образовательный центр в Павлодаре">
                    </div>
                    
                </div>      
            </div>
           
           
            
           
            <div class="section section--notop">
                <div class="container">
                    <h2 class="section__heading">Образование за рубежом Павлодар</h2>
                    <div class="seo-text">
	                    <p>Павлодар Образование за рубежом - основное направление нашего образовательного центра в Павлодаре GSC. Мы оказываем помощь ученикам получить  качественное образование за рубежом в самых лучших и крутых учебных организациях. После того как обучитесь за рубежом, учеников ожидает увлекательная и высокооплачиваемая работа, а также огромный карьерный рост. Наши уникальные языковые знания помогут каждому научиться зарубежным языкам  высоких левелов, что поможет добиться результатов учебы за гранцей.</p>

						<p style="text-align:center">Дополнительно для вас:</p>
						<ul>
							<li><a href="/language-programs?city=pavlodar">Курсы английского языка в Павлодаре</a></li> 
							<li><a href="/country/czech?type=vuz">Обучение в Чехии</a></li> 
							<li><a href="/country/canada?type=vuz">Обучение в Канаде</a></li> 
							<li><a href="/language-program/podgotovka-k-ielts?city=pavlodar">Подготовка к IELTS Павлодар</a></li> 
							<li><a href="/language-programs?city=pavlodar">Языковые курсы в Павлодаре</a></li> 
							<li><a href="/page/letnie-kursy-za-rubezhom">Летние каникулы за рубежом</a></li>
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