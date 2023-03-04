<div class="main-page">
	<?php echo $this->element('user_sidebar'); ?>
	<div class="right-part box">
		<ul class="breadcrumbs">
            <li><a href="/"><?=__('Главная')?></a></li>
            <li><a href="/"><?=__('Личный кабинет')?></a></li>
            <li><?=__('Мои комментарии')?></li>
        </ul>
		<h1 class="c-heading"><?=__('Мои комментарии')?></h1>
		<ul class="com-list">
		<?php foreach($comments as $item): ?>
			<li>
				<div class="cab-com">
				<?php 
					if($item['Comment']['type'] == 'News' || $item['Comment']['type'] == 'Audio' || $item['Comment']['type'] == 'Article'){
						$url = $item[$item['Comment']['type']]['alias'];
					}else{
						$url = $item[$item['Comment']['type']]['id'];
					}
				?>
					<a class="cab-com__heading" href="/<?=$lang?><?=$types[$item['Comment']['type']].$url.'#comment'.$item['Comment']['id'];?>">
						<?php echo $item[$item['Comment']['type']]['title'] ?>
					</a>
					<span class="cab-com__name"><?=__('Комментарий')?>:</span>
					<p><?php echo $item['Comment']['body'] ?></p>
				</div>
			</li>
			<?php endforeach ?>													
		</ul>
	</div>
</div>