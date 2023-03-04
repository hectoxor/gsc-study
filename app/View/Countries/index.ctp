<div class="content">
	<div class="head-second-page" style="background-image: url(/img/language_program_head.png);">
		<div class="container">
			<ul class="breadcrumbs">
				<li>
					<a href="/">
						Главная 
					</a>
				</li>
				<li>
					
						<?php 
							if(isset($_GET['type']) && $_GET['type'] == 'vuz'){
								echo "<a href='/vuzs'>Высшее образование</a>";
							}

							if(isset($_GET['type']) && $_GET['type'] == 'srednee-obrazovanie'){
								echo "<a href='/mba'>Среднее образование</a>";
							}

							if(isset($_GET['type']) && $_GET['type'] == 'yazykovye-kursy'){
								echo "<a href='/magistracy'>Языковые курсы за рубежом</a>";
							}
						?>
				</li>
				<li>
					<span>
						<?php 
					if(isset($_GET['type']) && $_GET['type'] == 'vuz'){
						// echo $data['Country']['h1_vuz'];
						echo ($data['Country']['h1_vuz']) ? $data['Country']['h1_vuz'] : $data['Country']['title'];
					}

					if(isset($_GET['type']) && $_GET['type'] == 'srednee-obrazovanie'){
						// echo $data['Country']['h1_vuz'];
						echo ($data['Country']['h1_mba']) ? $data['Country']['h1_mba'] : $data['Country']['title'];
					}

					if(isset($_GET['type']) && $_GET['type'] == 'yazykovye-kursy'){
						// echo $data['Country']['h1_vuz'];
						echo ($data['Country']['h1_magistratura']) ? $data['Country']['h1_magistratura'] : $data['Country']['title'];
					}
				?>
					</span>
				</li>
			</ul>
			<h1 class="second-page-title">
				<?php 
					if(isset($_GET['type']) && $_GET['type'] == 'vuz'){
						// echo $data['Country']['h1_vuz'];
						echo ($data['Country']['h1_vuz']) ? $data['Country']['h1_vuz'] : $data['Country']['title'];
					}

					if(isset($_GET['type']) && $_GET['type'] == 'srednee-obrazovanie'){
						// echo $data['Country']['h1_vuz'];
						echo ($data['Country']['h1_mba']) ? $data['Country']['h1_mba'] : $data['Country']['title'];
					}

					if(isset($_GET['type']) && $_GET['type'] == 'yazykovye-kursy'){
						// echo $data['Country']['h1_vuz'];
						echo ($data['Country']['h1_magistratura']) ? $data['Country']['h1_magistratura'] : $data['Country']['title'];
					}
				?>
				<?//=($data['Country']['h1']) ? $data['Country']['h1'] : $data['Country']['title'];?>
			</h1>
		</div>
	</div>
	<div class="section section--nobot">
		<div class="container">
			<div class="static-info сountry-info">
				<?php
				 	if(isset($_GET['type']) && $_GET['type'] == 'vuz'){
						echo $data['Country']['text_vuz'];
					}

					if(isset($_GET['type']) && $_GET['type'] == 'yazykovye-kursy'){
						echo $data['Country']['text_magistratura'];
					}

					if(isset($_GET['type']) && $_GET['type'] == 'srednee-obrazovanie'){
						echo $data['Country']['text_mba'];
					}
				?>
			</div>
		</div>
	</div>
	<div class="section section--no">
		<div class="container">
			<ul class="card-list card-list--full price-list">
				<?php foreach($final_univers as $item): ?>
				<li>
					<div class="card-item card-item--full way" style="background-image: url(/img/universities/<?=$item['University']['img']?>);">
						<div class="card-item__top">
							<div class="card-item__left">
								<div class="card-item__title">
									<?=$item['University']['title']?>
								</div>
								<div class="card-item__des">
									<?= $this->Text->truncate(strip_tags($item['University']['body']), 90, array('ellipsis' => '...', 'exact' => true)) ?>
								</div>
							</div>
							<div class="card-item__right">
								<div class="card-item__price">
									<div class="card-item__price_title">
										Cтоимость за год:
									</div>
									<div class="card-item__price_sum">
										<?=$item['University']['price']?>
									</div>
								</div>
								<div class="card-item__price">
									<div class="card-item__price_title">
										Программа:
									</div>
									<div class="card-item__price_sum">
										<?=$item['University']['program']?>
									</div>
								</div>
							</div>
						</div>
						<div class="card-item-bottom">
							<a href="/university/<?=$item['University']['alias']?>" class="read-more">
								Подробнее
							</a>
						</div>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>		
	</div>
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
								<input id="name" name="name" type="text">
							</div>
							<div class="feedback-row">
								<label for="phone">Введите свои номер телефона</label>
								<input id="phone" name="phone" type="text">
							</div>
							<div class="feedback-row">
								<label for="email">Электронная почта</label>
								<input id="email" name="email" type="text">
							</div>																					
							<div class="feedback-row">
								<label for="question">Вопрос?</label>
								<textarea id="question" name="question"></textarea>																		
							</div>
							<input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
							<input name="page" value="Образование за рубежом: <?=$data['Country']['title'];?>" type="hidden">
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
	<?php echo $this->element('footer') ?>
</div>
<script src="/js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
	
	$('.select-list li a').on('click',function(e){
		var urlRedirect = $(this).attr('href');
		e.preventDefault();
		var urlPage = location.href;

		// function param(urlPage) {
		//     return (location.search.split("/")[0]);
		// }
		// var search = window.location.search.substr(1),
  //               keys = {};
  //               search.split('/').forEach(function(item) {
  //               item = item.split('=');
  //               keys[item[0]] = item[1];
  //           });
//   var url = 'https://www.instagram.com/p/BGrZOf5OTpH/?taken-by=/...';
// var id = /instagram.com\/country\/(.*?)\//.exec(urlPage)[1];
// console.log(id); // BGrZOf5OTpH
		var urlGO =urlPage.replace(/^(([^\/]*\/){6,6}).*/,'$1').split("?")[0];
		console.log(urlRedirect.substr(1));
		window.location.href= urlGO+'?type=vuz&'+urlRedirect.substr(1);
	});
</script>