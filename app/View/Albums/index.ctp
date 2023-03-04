<div class="main-page">
    <?php echo $this->element('left_sidebar'); ?>
    <div class="right-part box">
        <ul class="breadcrumbs">
            <li><a href="/<?=$lang?>"><?=__('Главная')?></a></li>
            <li><?=__('Фотогалерея')?></li>
        </ul>
        <ul class="gallery-category clearfix">
            <li>
                <a class="active" href="/<?=$lang?>albums"><?=__('Все')?></a>      
            </li>
            
            <?php foreach($categories as $item): ?>
            <li>
                <a href="/<?=$lang?>albums/category/<?=$item['Category']['id']?>" <?=(isset($this->request->query['cat']) && $this->request->query['cat'] == $item['Category']['id']) ? 'class="active"' : "" ?>><?=$item['Category']['title']?></a>
            </li>
            
            <?php endforeach ?>
            <li>
                <a class="" href="/<?=$lang?>instagram/view"><?=__('Картинки для Instagram')?></a>      
            </li>
        </ul>
        
        <?php foreach($categories as $item): ?>
            <div class="gallery-section">
                <a class="gallery-section__heading" href="/<?=$lang?>albums/category/<?=$item['Category']['id']?>"><?=$item['Category']['title']?></a>
                <ul class="photogallery-ul">
                <?php for($j = 0; $j <= count($albums) - 1 ; $j++): ?>
                    <?php foreach ($albums[$j] as $photo):?>
                    <?php if($photo['Album']['category_id'] == $item['Category']['id']): ?>
                        <li>
                             <div class="gallery-mini">
                                <a class="gallery-mini__img" href="/<?=$lang?>gallery/view/<?=$photo['Album']['id']?>">
                                    <img src="/img/gallery/<?=$photo['Gallery'][0]['img']?>" width="202px">
                                </a>
                                <a class="gallery-mini__heading" href="/<?=$lang?>gallery/view/<?=$photo['Album']['id']?>"><?= $this->Text->truncate(strip_tags($photo['Album']['title']), 51, array('ellipsis' => '...', 'exact' => true)) ?></a>
                                <div class="article-bot">
                                    <span class="article-bot__date">
                                        <?=$this->Common->beauty_date($photo['Album']['date']);?>
                                    </span>
                                    <span class="article-bot__view">
                                        <?=$photo['Album']['views']?>
                                    </span>
                                </div>
                             </div>
                        </li>
                    <?php endif ?>
                    
                <?php endforeach ?>
                <?php endfor ?>
                </ul>
            </div>
        <?php endforeach ?>
        <?php 
            if($clang == 'ru'){
                $img = 'img_ru';
            }else{
                $img='img';
            } 
        ?>
       <div class="gallery-section">
            <a class="gallery-section__heading" href="/<?=$lang?>instagram/view"><?=__('Картинки для Instagram')?></a>
            <div class="instagram-part">
                <div class="instagram-part__item">
                    <a class="instagram-main fancybox" data-fancybox-group="gallery" href="/img/instagram/<?=$big_img['Instagram'][$img]?>">
                        <div class="instagram-main__img" style="background-image:url(/img/instagram/<?=$big_img['Instagram'][$img]?>)" ></div>
                    </a>
                </div>
                <div class="instagram-part__item">
                    <ul class="instagram-ul">
                    <?php foreach($insta as $item): ?>
                        <li>
                            
                            <a href="/img/instagram/<?=$item['Instagram'][$img]?>" data-fancybox-group="gallery" class="instagram-mini fancybox">
                                <div style="background-image:url(/img/instagram/<?=$item['Instagram'][$img]?>)" class="instagram-mini__img"></div>
                            </a>
                        </li>
                        <?php endforeach ?>                                                 
                    </ul>
                </div>                      
            </div>
        </div>
        
                                                                                        
    </div>


</div>