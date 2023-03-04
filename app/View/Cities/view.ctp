<div class="page_block">
	<div class="container">
		<?=$this->element('breadcrumbs')?>
		<p class="title"><?php echo $data['Project']['title'] ?></p>
		<div class="page_text text">
			<?php echo $data['Project']['body'] ?>
		</div>

		<?php if($data['Photo']): ?>
		<div class="gallery_block">
			<p class="category_title">Фото</p>
			<div class="gallery_slider">
				<?php foreach($data['Photo'] as $photo): ?>
				<div>
					<div data-fancybox="gallery_1" data-src="/img/photos/<?=$photo['img']?>" class="gal_item img" style="background-image: url(/img/photos/<?=$photo['img']?>);"></div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		<?php endif ?>

		<?php if($data['Project']['youtube']): ?>
			<div class="video_block">
				<p class="category_title">Видео</p>
				<div class="video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$data['Project']['youtube'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		<?php endif ?>
	</div>
</div>