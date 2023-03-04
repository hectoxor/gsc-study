<div class="main-page">
	<?php echo $this->element('user_sidebar'); ?>
	<div class="right-part box">
		<ul class="breadcrumbs">
            <li><a href="/<?=$lang?>"><?=__('Главная')?></a></li>
            <li><a href="/<?=$lang?>users/cabinet"><?=__('Личный кабинет')?></a></li>
            <li><?=__('Избранное')?></li>
        </ul>
		<h1 class="c-heading"><?=__('Избранное')?></h1>
		<ul class="cat-ul">
			<li class="active">
				<a href="#"><?=__('Все подряд')?></a>
			</li>
			<li>
				<a href="#"><?=__('Статьи')?></a>
			</li>
			<li>
				<a href="#"><?=__('Новости')?></a>
			</li>
			<li>
				<a href="#"><?=__('Вопросы-ответы')?></a>
			</li>
			<li>
				<a href="#"><?=__('Фотогалерея')?></a>
			</li>
			<li>
				<a href="#"><?=__('Аудио')?></a>
			</li>
			<li>
				<a href="#"><?=__('Видео')?></a>
			</li>
			<li>
				<a href="#"><?=__('Книги')?></a>
			</li>    
		</ul>
		<div class="cab-isbrannoe">
		<?php if(isset($articles) && !empty($articles)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Статьи')?></span>
				<ul class="st-rows">
				<?php foreach($articles as $item): ?>
				<li>
					<div class="st-mini">
						<a class="st-mini__img" href="/<?=$lang?>article/<?=$item['Article']['alias']?>">
                            <img src="/img/articles/thumbs/<?=$item['Article']['img']?>">
                        </a>
						<div class="st-mini__text">	
							<div class="st-info">
								<span class="st-info__name">
									<?php foreach($categories as $cat){
                                    if($item['Article']['category_id'] == $cat['Category']['id']) echo $cat['Category']['title'];
                                } ?>
								</span>
								<a class="st-info__heading" href="/<?=$lang?>article/<?=$item['Article']['alias']?>">
                                    <?= $this->Text->truncate(strip_tags($item['Article']['title']), 67, array('ellipsis' => '...', 'exact' => true)) ?>
                                </a>
								<p>
									<?= $this->Text->truncate(strip_tags($item['Article']['body']), 127, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
								<div class="big-bot">
									<span class="big-bot__text">
										<?=$this->Common->beauty_date($item['Article']['date']);?>
									</span>
									<span class="big-bot__view">
										<?=$item['Article']['views']?>
									</span>
									<span class="big-bot__comments">
										<?php echo count($item['Comment']); ?>
									</span>
								</div>
							</div>								
						</div>
					</div>
				</li>
					<?php endforeach ?>																					
			</ul>
			</div>
		<?php endif ?>
		<?php if(isset($news) && !empty($news)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Новости')?></span>
				<ul class="st-rows">
				<?php foreach($news as $item): ?>
				<li>
					<div class="st-mini">
						<a class="st-mini__img" href="/<?=$lang?>news/<?=$item['News']['alias']?>">
                            <img src="/img/news/thumbs/<?=$item['News']['img']?>">
                        </a>
						<div class="st-mini__text">	
							<div class="st-info">
								<span class="st-info__name">
									<?php foreach($categories as $cat){
                                    if($item['News']['category_id'] == $cat['Category']['id']) echo $cat['Category']['title'];
                                } ?>
								</span>
								<a class="st-info__heading" href="/<?=$lang?>news/<?=$item['News']['alias']?>">
                                    <?= $this->Text->truncate(strip_tags($item['News']['title']), 67, array('ellipsis' => '...', 'exact' => true)) ?>
                                </a>
								<p>
									<?= $this->Text->truncate(strip_tags($item['News']['body']), 127, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
								<div class="big-bot">
									<span class="big-bot__text">
										<?=$this->Common->beauty_date($item['News']['date']);?>
									</span>
									<span class="big-bot__view">
										<?=$item['News']['views']?>
									</span>
									<span class="big-bot__comments">
										<?php echo count($item['Comment']); ?>
									</span>
								</div>
							</div>								
						</div>
					</div>
				</li>
					<?php endforeach ?>																					
			</ul>
			</div>
		<?php endif ?>
		<?php if(isset($questions) && !empty($questions)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Вопросы-ответы')?></span>
				<ul class="st-rows">
				<?php foreach($questions as $item): ?>
				<li>
					<div class="st-mini">
						<a class="st-mini__img" href="/<?=$lang?>questions/view/<?=$item['Question']['id']?>">
                            <img src="/img/questions/thumbs/<?=$item['Question']['img']?>">
                        </a>
						<div class="st-mini__text">	
							<div class="st-info">
								<span class="st-info__name">
									<?php foreach($categories as $cat){
                                    if($item['Question']['category_id'] == $cat['Category']['id']) echo $cat['Category']['title'];
                                } ?>
								</span>
								<a class="st-info__heading" href="/<?=$lang?>questions/view/<?=$item['Question']['id']?>">
                                    <?= $this->Text->truncate(strip_tags($item['Question']['title']), 67, array('ellipsis' => '...', 'exact' => true)) ?>
                                </a>
								<p>
									<?= $this->Text->truncate(strip_tags($item['Question']['body']), 127, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
								<div class="big-bot">
									<span class="big-bot__text">
										<?=$this->Common->beauty_date($item['Question']['date']);?>
									</span>
									<span class="big-bot__view">
										<?=$item['Question']['views']?>
									</span>
									<span class="big-bot__comments">
										<?php echo count($item['Comment']); ?>
									</span>
								</div>
							</div>								
						</div>
					</div>
				</li>
					<?php endforeach ?>																					
			</ul>
			</div>
		<?php endif ?>
		<?php if(isset($galleries) && !empty($galleries)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Фотогалерея')?></span>
				<ul class="photogallery-ul">
				<?php foreach($galleries as $item): ?>
					<li>
						<div class="gallery-mini">
							<a class="gallery-mini__img" href="#">
								<img src="/img/gallery/<?=$item['Gallery']['img']?>" width="200px">
							</a>
							<a class="gallery-mini__heading">Наиб мүфти төрағалығымен ЖАНТ жетекшілерінің жалпы жиналысы өтті</a>
							<div class="article-bot">
								<span class="article-bot__date">
									28 февраля 2018
								</span>
								<span class="article-bot__view">
									10 359
								</span>
							</div>
						</div>
					</li>
					<?php endforeach ?>																				
				</ul>
			</div>
		<?php endif ?>
		<?php if(isset($audios) && !empty($audios)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Аудио')?></span>
				<ul class="st-rows">
				<?php foreach($audios as $item): ?>
				<li>
					<div class="st-mini">
						<a class="st-mini__img" href="/<?=$lang?>audios/view/<?=$item['Audio']['alias']?>">
                            <img src="/img/audios/thumbs/<?=$item['Audio']['img']?>">
                        </a>
						<div class="st-mini__text">	
							<div class="st-info">
								<span class="st-info__name">
									<?php foreach($categories as $cat){
                                    if($item['Audio']['category_id'] == $cat['Category']['id']) echo $cat['Category']['title'];
                                } ?>
								</span>
								<a class="st-info__heading" href="/<?=$lang?>audios/view/<?=$item['Audio']['alias']?>">
                                    <?= $this->Text->truncate(strip_tags($item['Audio']['title']), 67, array('ellipsis' => '...', 'exact' => true)) ?>
                                </a>
								<p>
									<?= $this->Text->truncate(strip_tags($item['Audio']['body']), 127, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
								<div class="big-bot">
									<span class="big-bot__text">
										<?=$this->Common->beauty_date($item['Audio']['date']);?>
									</span>
									<span class="big-bot__view">
										<?=$item['Audio']['views']?>
									</span>
									<span class="big-bot__comments">
										<?php echo count($item['Comment']); ?>
									</span>
								</div>
							</div>								
						</div>
					</div>
				</li>
					<?php endforeach ?>																					
			</ul>
			</div>
		<?php endif ?>
		<?php if(isset($videos) && !empty($videos)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Видео')?></span>
				<ul class="st-rows">
				<?php foreach($videos as $item): ?>
				<li>
					<div class="st-mini">
						<a class="st-mini__img" href="/<?=$lang?>videos/view/<?=$item['Video']['id']?>">
                            <img src="/img/videos/thumbs/<?=$item['Video']['img']?>">
                        </a>
						<div class="st-mini__text">	
							<div class="st-info">
								<span class="st-info__name">
									<?php foreach($categories as $cat){
                                    if($item['Video']['category_id'] == $cat['Category']['id']) echo $cat['Category']['title'];
                                } ?>
								</span>
								<a class="st-info__heading" href="/<?=$lang?>videos/view/<?=$item['Video']['id']?>">
                                    <?= $this->Text->truncate(strip_tags($item['Video']['title']), 67, array('ellipsis' => '...', 'exact' => true)) ?>
                                </a>
								<p>
									<?= $this->Text->truncate(strip_tags($item['Video']['body']), 127, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
								<div class="big-bot">
									<span class="big-bot__text">
										<?=$this->Common->beauty_date($item['Video']['date']);?>
									</span>
									<span class="big-bot__view">
										<?=$item['Video']['views']?>
									</span>
									<span class="big-bot__comments">
										<?php echo count($item['Comment']); ?>
									</span>
								</div>
							</div>								
						</div>
					</div>
				</li>
					<?php endforeach ?>																					
			</ul>
			</div>
		<?php endif ?>
		<?php if(isset($libraries) && !empty($libraries)): ?>
			<div class="cab-section">
				<span class="cab-section__heading"><?=__('Книги')?></span>
				<ul class="st-rows">
				<?php foreach($libraries as $item): ?>
				<li>
					<div class="st-mini">
						<a class="st-mini__img" href="/<?=$lang?>libraries/view/<?=$item['Library']['id']?>">
                            <img src="/img/libraries/thumbs/<?=$item['Library']['img']?>">
                        </a>
						<div class="st-mini__text">	
							<div class="st-info">
								<span class="st-info__name">
									<?php foreach($categories as $cat){
                                    if($item['Library']['category_id'] == $cat['Category']['id']) echo $cat['Category']['title'];
                                } ?>
								</span>
								<a class="st-info__heading" href="/<?=$lang?>libraries/view/<?=$item['Library']['id']?>">
                                    <?= $this->Text->truncate(strip_tags($item['Library']['title']), 67, array('ellipsis' => '...', 'exact' => true)) ?>
                                </a>
								<p>
									<?= $this->Text->truncate(strip_tags($item['Library']['body']), 127, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
								<div class="big-bot">
									<span class="big-bot__text">
										<?=$this->Common->beauty_date($item['Library']['date']);?>
									</span>
									<span class="big-bot__view">
										<?=$item['Library']['views']?>
									</span>
									<span class="big-bot__comments">
										<?php echo count($item['Comment']); ?>
									</span>
								</div>
							</div>								
						</div>
					</div>
				</li>
					<?php endforeach ?>																					
			</ul>
			</div>
		<?php endif ?>
		</div>																					
	</div>
</div>