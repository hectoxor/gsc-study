<div class="static-part__right">
	<ul class="news-list">
	<?php foreach($sidebar_news as $item): ?>
		<li>
			<a href="/news/<?=$item['News']['alias']?>" class="news-item" style="background-image:url(/img/news/thumbs/<?=$item['News']['img']?>)">
				<div class="news-item__img"></div>
				<div class="news-item__text">
					<div class="news-item__top">
						<div class="news-date">
                    <span class="news-date__number"><?=$this->Common->get_day($item['News']['date']);?></span>
                    <div class="news-date__text">
                        <span><?=$this->Common->get_month($item['News']['date']);?></span> 
                        <span><?=$this->Common->get_year($item['News']['date']);?></span>
                    </div>
                </div>
					</div>
					<span class="news-item__heading">
						<?=$item['News']['title']?>
					</span>
				</div>
			</a>
		</li>
		<?php endforeach ?>
	</ul>
</div>