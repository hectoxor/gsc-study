<div class="page_block">
	<div class="container">
	<?php echo $this->element('breadcrumbs') ?>
		<h1 class="title">Поиск</h1>
		<div class="page_text text">
		<p>Найдено элементов: <?=$count?></p>
			<?php if($res_projects || $res_services || $res_products): ?>
				<ul>
					<?php foreach($res_projects as $item): ?>
						<li><a href="/project/<?=$item['projects']['alias']?>"><?=$item['projects']['title']?></a></li>
					<?php endforeach ?>
					<?php foreach($res_services as $item): ?>
						<li><a href="/service/<?=$item['services']['alias']?>"><?=$item['services']['title']?></a></li>
					<?php endforeach ?>
					<?php foreach($res_products as $item): ?>
						<li><a href="/product/<?=$item['products']['alias']?>"><?=$item['products']['title']?></a></li>
					<?php endforeach ?>
				</ul>
			<?php else: ?>
				<p>К сожалению по даному запросу ничего не найдено...</p>
			<?php endif ?>			
		</div>
	</div>
</div>