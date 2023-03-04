<div class="page_block">
	<div class="container">
		<?php echo $this->element('breadcrumbs') ?>
		<p class="title"><?=$data['Category']['title']?></p>
		<?php foreach($child_cats as $item): ?>
		<div class="category">
			<p class="category_title"><?=$item['Category']['title']?></p>
			<div class="category_block">
				<?php foreach($item['Product'] as $p): ?>
				<div class="category_item">
					<a href="/product/<?=$p['alias']?>" class="category_img" style="background-image: url(/img/products/<?=$p['img']?>);"></a>
					<p class="category_name"><?=$p['title']?></p>
					<a href="/product/<?=$p['alias']?>" class="model_name"><?=$p['brand']?></a>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		<?php endforeach ?>
		<!-- <div class="category">
			<p class="category_title">Светодиодные головы</p>
			<div class="category_block">
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_1.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Scenius Un1co</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_2.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Scenius Spot</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_1.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Mythos</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_1.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Alpha Spot 1500 hpe</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_2.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Alpha Spot 1500 hpe</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_1.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Alpha Spot 1500 hpe</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_2.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Alpha Spot 1500 hpe</a>
				</div>
				<div class="category_item">
					<a href="category_item.html" class="category_img" style="background-image: url(img/color_1.png);"></a>
					<p class="category_name">Clay Paky</p>
					<a href="category_item.html" class="model_name">Alpha Spot 1500 hpe</a>
				</div>
			</div>
		</div> -->
	</div>
</div>