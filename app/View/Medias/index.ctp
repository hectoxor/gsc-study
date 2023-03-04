<div class="second-page">
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
</div>