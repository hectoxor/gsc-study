<div class="main-page">
<?php echo $this->element('left_sidebar'); ?>
<div class="right-part box">
	<ul class="breadcrumbs">
        <li><a href="/<?=$lang?>"><?=__('Главная')?></a></li>
        <li><?=__('Мешіт тынысы')?></li>
    </ul>
	<h1 class="c-heading"><?=__('Мешіт тынысы')?></h1>
	<div class="meshit-mini">
		<a class="meshit-mini__img" href="#">
			<img src="/img/pages/<?=$data['Page']['img']?>">
		</a>
		<div class="meshit-mini__info">
			<p><?= $this->Text->truncate(strip_tags($data['Page']['body']), 740, array('ellipsis' => '...', 'exact' => true)) ?></p>
			<a class="meshit-mini__btn" href="/<?=$lang?>page/meshit-tynysy"><?=__('Подробнее')?></a>
		</div>
	</div>	
	<h1 class="c-heading">Біздің ұжым</h1>	
	<div class="meshit-mufti box">
		<div class="meshit-carousel">
		<?php foreach($leaderships as $item): ?>
			<div>
				<a href="/<?=$lang?>leaderships/view/<?=$item['Leadership']['id']?>" class="mufti-item">
					<img src="/img/leaderships/<?=$item['Leadership']['img']?>">
					<div class="mufti-item__bot">
						<span class="mufti-item__type">
							<?=$item['Leadership']['position']?>
						</span>
						<span class="mufti-item__heading">
							<?=$item['Leadership']['title']?>
						</span>
					</div>
				</a>
			</div>
			<?php endforeach ?>							
		</div>
	</div>
	<span class="c-heading"><?=__('Новости мечети')?></span>
	<ul class="st-rows">
		<?php foreach($news as $item): ?>
		<li>
			<div class="st-mini">
				<a class="st-mini__img" href="#">
					<img src="/img/news/thumbs/<?=$item['News']['img']?>">
				</a>
				<div class="st-mini__text">	
					<div class="st-info">
						<span class="st-info__name">
							<?=__('новости')?>
						</span>
						<a class="st-info__heading" href="#">
							<?=$item['News']['title']?>
						</a>
						<p>
							<?= $this->Text->truncate(strip_tags($item['News']['body']), 150, array('ellipsis' => '...', 'exact' => true)) ?>
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
	<a class="big-link box" href="#">Посмотреть все статьи</a>
</div>

