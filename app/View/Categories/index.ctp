<div class="container">
	<ul class="breadcrumbs">
		<li><a href="">Главная</a></li>
		<li>Каталог</li>
	</ul>
	<div class="content clearfix">
		<div class="catalog-page-top">
			<div class="title">
				Каталог товаров
			</div>
			<div class="catalog-btn">
				<a href="/files/<?=$params['price']?>" download class="btn btn-price btn-icon">
					Скачать прайс ЛИСТ 
				</a>
				<a href="/files/<?=$params['catalog']?>" download class="btn btn-catalog btn-icon">
					Скачать каталог
				</a>
			</div>
		</div>
		<div class="catalog-side-bar">
			<a href="/catalog" class="catalog-side-bar__item">
				Все товары
			</a>
			<?php foreach($cats as $key => $value): ?>
			<a href="/catalog/<?=$key?>" class="catalog-side-bar__item">
				<?=$value?>
			</a>
		<?php endforeach ?>
		</div>
		<div class="catalog-content">
			<ul class="product-list">
			<?php foreach($data as $item): ?>
				<li>
					<a href="/products/view/<?=$item['Product']['id']?>" class="product-item">
						<div class="product-item__img">
							<img src="/img/products/thumbs/<?=$item['Product']['img']?>" alt="">
						</div>
						<div class="product-item__title">
							<?=$item['Product']['title']?>
						</div>
						<div class="product-item__des">
							<?=$item['Category']['title']?>
						</div>
						<div class="product-item__bottom">
							<div class="product-size">
								<?=$item['Characteristic']['c13']?>
							</div>
							<span class="product-read-more">
								Подробнее
							</span>
						</div>
					</a>
				</li>
<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>