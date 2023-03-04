<div class="news-page section-padding">
	<div class="container">
		<div class="second-page-title">
			<?=__('Нормативно правовая база')?>
		</div>
		<ul class="zakup-list">
		<?php foreach($data as $item): ?>
			<li>
				<div class="zakup-item">
					<div class="zakup-item__img">
						<img src="/img/doc-img.png" alt="">
					</div>
					<div class="zakup-item__title">
						<?=$item['Doc']['title']?>
					</div>
					<div class="zakup-item__text">
						<?=$item['Doc']['body']?>
					</div>
					<?php $l = Configure::read('Config.language'); ?>
					<?php $doc = 'doc_'.$l; ?>
					<a href="/files/docs/<?=$item['Doc'][$doc]?>" download class="read-more-small">
						<?=__('Скачать')?>
					</a>
				</div>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
	
</div>