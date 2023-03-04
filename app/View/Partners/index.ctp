<div class="page_block">
	<div class="container">
		<?=$this->element('breadcrumbs') ?>
		<div class="product_block">
			<div class="partners">
				<div class="info_item">
					<p class="title">Партнеры</p>
				</div>
				<div class="info_item">
					<p class="info_title">Промоутеры</p>
					<div class="part_block first">
						<?php foreach($data as $item): ?>
							<?php if($item['Partner']['type'] == 'promoter'): ?>
								<a href="<?=$item['Partner']['link']?>" class="part_item"><img src="/img/partners/<?=$item['Partner']['img']?>" alt=""></a>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>
				<div class="info_item">
					<p class="info_title">Использован на мероприятиях:</p>
					<div class="part_block">
						<?php foreach($data as $item): ?>
							<?php if($item['Partner']['type'] == 'event'): ?>
								<a href="<?=$item['Partner']['link']?>" class="part_item"><img src="/img/partners/<?=$item['Partner']['img']?>" alt=""></a>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>
				<div class="info_item">
					<p class="info_title">Производитель</p>
					<div class="part_block">
						<?php foreach($data as $item): ?>
							<?php if($item['Partner']['type'] == 'fabricator'): ?>
								<a href="<?=$item['Partner']['link']?>" class="part_item"><img src="/img/partners/<?=$item['Partner']['img']?>" alt=""></a>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>