<div class="page_block">
	<div class="container">
	<?php echo $this->element('breadcrumbs') ?>
		<p class="title"><?=$data['Service']['title']?></p>
		<img class="page_img" src="/img/services/<?=$data['Service']['img']?>" alt="<?=$data['Service']['title']?>">
		<div class="page_text text">
			<?=$data['Service']['body']?>
		</div>
	</div>
</div>