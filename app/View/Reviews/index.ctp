<div class="page-header-content">
    <div class="container">
        <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/<?= $lang ?>"><span itemprop="name">Главная</span></a>
                <meta itemprop="position" content="1">
            </li>
            <li class="breadcrumb-item active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="item">Отзывы</span>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>
<section class="section reviews">
    <div class="container">
        <h2 class="title">Отзывы</h2>
        <?php if( isset($data) && $data ): ?>
        	<?php foreach( $data as $item ): ?>
		        <div class="reviews__item">
		            <a href="javascript:;" class="reviews__item-pic review-popup pic-increase" data-src="#popup-review" data-fancybox>
		                <img src="/img/reviews/<?= $item['Review']['img'] ?>" alt="<?= $item['Review']['title'] ?>">
		            </a>
		            <div class="reviews__item-info">
		                <div class="student-pos"><?= $item['Review']['edu_univer'] ?></div>
		                <h3 class="reviews-title">
		                    <?= $item['Review']['title'] ?>
		                </h3>
		                <div class="reviews__item-texts">
		                    <?= $item['Review']['body'] ?>
		                </div>
		                <a href="javascript:;" data-src="#popup-review" data-fancybox class="btn review-popup">Подробнее</a>
		            </div>
		        </div>
        	<?php endforeach; ?>
        <?php endif; ?>
        <!-- <ul class="pagination">
            <li class="prev disabled"><a href=""></a></li>
            <li class="active"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="next"><a rel="next" href=""></a></li>
        </ul> -->
        <div class="pagi">     
            <div class="pag-bot">
                <ul class="pagination">
                    <li class="pag-bot__arrow"><?php echo $this->Paginator->first('<<'); ?></li>
                    <?php echo $this->Paginator->numbers(
                        array(
                            'separator' => '',
                            'tag' => 'li',
                            'modulus' => 4
                            )
                    ); ?>
                    <li class="pag-bot__arrow"><?php echo $this->Paginator->last('>>'); ?></li>
                </ul>
            </div>  
        </div>
    </div>
</section>


<!-- <div class="second-page">
	<div class="container">
		<div class="title middle-text">
			Фото
		</div>
		<ul class="gallery-list">
		<?php foreach($photos as $item): ?>
			<li >
				<div class="gallery-item">
					<div class="gallery-item__img">
						<img src="/img/pictures/thumbs/<?=$item['Picture']['img']?>" alt="<?=$item['Picture']['title']?>">
					</div>
					<div class="gallery-item__text">
						<?=$item['Picture']['title']?>
					</div>
				</div>
			</li>
			<?php endforeach ?>
		</ul>
		<div class="title middle-text">
			Видео
		</div>
		<ul class="gallery-list">
		<?php foreach($videos as $item): ?>
			<li >
				<div class="gallery-item video-item">
					<iframe  src="https://www.youtube.com/embed/FdCsF2ohFQc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</div> -->