<ul class="breadcrumbs">
	<li>
		<a href="/<?=$lang?>">Главная</a>
	</li>
	<li>
		<span>Каталог</span>
	</li>					
</ul>
<div class="catalog">
	<div class="catalog__left">
		<div class="catalog-list">
			<span class="catalog-list__heading">
				По типу
			</span>
			<ul class="catalog-menu">
			<?php foreach($categories as $item): ?>
				<li>
					<a href="/<?=$lang?>catalog/<?=$item['Category']['id']?>">
						<span><?=$item['Category']['title']?></span>
					</a>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="catalog__right">
		<ul class="catalog-ul">
		<?php foreach($data as $item): ?>
			<li>
				<a href="/products/view/<?=$item['Product']['id']?>" class="catalog-item grey">
					<div class="catalog-item__info">
						<div class="catalog-item__left">
							<div class="prod-text">
								<span class="prod-text__heading">
									<?=$item['Product']['title']?>
								</span>
								<p><?= $this->Text->truncate(strip_tags($item['Product']['body']), 80, array('ellipsis' => '...', 'exact' => true)) ?></p>											
							</div>
						</div>
						<div class="catalog-item__img">
							<div class="c-img">
								<img src="/img/products/thumbs/<?=$item['Product']['img']?>" alt="<?=$item['Product']['title']?>">
							</div>
						</div>
					</div>	
					<div class="catalog-item__more">
						<span>Подробнее</span>
					</div>
				</a>
			</li>
		<?php endforeach ?>
		</ul>
		<div class="pagi">
		    	<div class="pages"><div class="page-count"> <strong><?=__('Страница')?>:</strong></div>
				<?php 
				echo $this->Paginator->counter(array(
				    'separator' => ' из ',
				    
				    ));
				 ?>
				</div>		
				<div class="pag-bot">
					<div class="pag-bot__arrow"><?php echo $this->Paginator->first('<<'); ?></div>
					<ul class="pagination">
					<?php echo $this->Paginator->numbers(
					    array(
					        'separator' => '',
					        'tag' => 'li',
					        'modulus' => 4
					        )
					); ?>
			    	</ul>
					<div class="pag-bot__arrow"><?php echo $this->Paginator->last('>>'); ?></div>
				</div>	
			</div>
	</div>
</div>