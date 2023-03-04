<div class="second-page">
	<div class="container">
		<div class="title middle-text">
			Фото
		</div>
		<ul class="gallery-list">
		<?php foreach($photos as $item): ?>
			<li >
				<div class="gallery-item">
				<?php if(isset($item['Gallery'][0]['img']) && !empty($item['Gallery'][0]['img'])): ?>
					<a class="gallery-item__img" href="/albums/view/<?=$item['Album']['id']?>">
						<img src="/img/gallery/thumbs/<?=$item['Gallery'][0]['img']?>" alt="<?=$item['Picture']['title']?>">
					</a>
				<?php endif ?>
					<a class="gallery-item__text"  href="/albums/view/<?=$item['Album']['id']?>">
							<?=$item['Album']['title']?>
					</a>
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
</div>