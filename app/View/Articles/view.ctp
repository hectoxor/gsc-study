<div class="content">
	<div class="head-second-page" style="background-image: url(/img/language_program_head.png);">
		<div class="container">
			<?php echo $this->element('breadcrumbs') ?>
			<h1 class="second-page-title">
				<?php echo $post['Article']['h1'] ?>
			</h1>
		</div>
	</div>
	
	<div class="section ">
		<div class="container">
			<div class="static-info">
				<img src="/img/articles/<?=$post['Article']['img']?>" alt="">
				<?php echo $post['Article']['body'] ?>
				<div class="share">
					<span class="share__heading">Поделиться:</span>
					<div class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
				</div>
			</div>
		</div>		
	</div>
	<?=$this->element('footer') ?>
</div>