<div class="slider">
<?php foreach($slides as $item): ?>
    <div style="background-image:url(/img/slides/<?=$item['Slide']['img']?>)" class="slider-item">
        <div class="container">
            <div class="slider-text">
                <span class="slider-text__heading"><?=$item['Slide']['title']?></span>
                <p><?=$item['Slide']['body']?></p>
                <?php if($item['Slide']['link']): ?>
                <div class="slider-text__m">
                    <a class="btn" href="<?=$item['Slide']['link']?>">Подробнее</a>
                </div>
            <?php endif ?>
            </div>
        </div>
    </div>
<?php endforeach ?>
</div>