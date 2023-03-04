<div class="left-content left-content--static">
    <div class="content">
		<?php echo $page['StaticPage']['body']; ?>
		<div class="section section--nobot">
			<div class="feedback-bg">	
				<div class="container">
					<div class="feedback clearfix">
						<div class="feedback__left">
							<img src="/img/feedback-ico.png">		
						</div>	
						<div class="feedback-form">						
							<span class="feedback-form__heading">Появились вопросы или<br> хотите консультацию ?</span>													
							<form action="/requests/send" method="POST">
								<div class="feedback-row">
									<label for="name">Введите свое имя</label>
									<input id="name" name="name" type="text" required>
								</div>
								<div class="feedback-row">
									<label for="phone">Введите свои номер телефона</label>
									<input id="phone" name="phone" type="text" required>
								</div>
								<div class="feedback-row">
									<label for="email">Электронная почта</label>
									<input id="email" name="email" type="text" required>
								</div>																					
								<div class="feedback-row">
									<label for="question">Вопрос?</label>
									<textarea id="question" name="question"></textarea>																		
								</div>
								<input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
								<input name="page" value="Glion and Les Roches" type="hidden">
								<?php if($this->Session->check('city')): ?>
				                    <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
				                <?php else: ?>
				                   <input type="hidden" name="city" value="Нур-Султан"> 
				                <?php endif ?>

				                
		                        <div class="feedback-row feedback-row--last">
									<button type="submit">Оставить заявку</button>																	
								</div>
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div> 
	   <?=$this->element('footer')?>      
    </div>
                                               
</div>