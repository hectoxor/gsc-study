<div class="container">
	<div class="news-inner">	
		<ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="/<?= $lang ?>">
					<span itemprop="name">Главная</span>
				</a>
				<meta itemprop="position" content="1">
			</li>
			<li class="breadcrumb-item active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<span itemprop="item"><?= $post['News']['title'] ?></span>
				<meta itemprop="position" content="2">
			</li>
		</ol>
		<h1 class="title"><?= $post['News']['title'] ?></h1>
		<div class="news-inner__img">
			<img src="/img/news/<?= $post['News']['img'] ?>" alt="">
		</div>
		<div class="text">
			<?= $post['News']['body'] ?>
		</div>

		<?php if( isset($photos) && $photos ): ?>
			<div class="news-gallery">
				<span class="title news-gallery__heading">Галерея</span>
				<div class="news-slider">
					<?php foreach( $photos as $item ): ?>
						<div>
							<a class="news-sl" href="javascript:;" data-fancybox="news_gal" data-src="/img/photos/<?= $item['Photo']['img'] ?>">
								<img src="/img/photos/thumbs/<?= $item['Photo']['img'] ?>" alt="">
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
<style>
	
</style>