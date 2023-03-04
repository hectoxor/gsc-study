<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="/<?= $lang ?>">Главная</a></li>
    <?php if(isset($bc) && !empty($bc)): ?>
	    <?php foreach($bc as $item): ?>
	        <?php if($item): ?>
	            <li>
	            <?php if(!empty($item['link'])): ?>
	                <a href="<?=$item['link']?>" <?= (isset($item['id']) && !empty($item['id'])) ? 'id="'.$item['id'].'"' : ''?>>
	                    <?=$item['title']?> 
	                </a>
	            <?php else: ?>
	                <?php if(!empty($item['title'])): ?>
	                    <span><?=$item['title']?></span>
	                <?php endif ?>
	            <?php endif ?>
	            </li>
	        <?php endif ?>
	    <?php endforeach ?>
	<?php endif ?>
</ul>