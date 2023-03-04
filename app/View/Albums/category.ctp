<div class="main-page">
    <?php echo $this->element('left_sidebar'); ?>
    <div class="right-part box">
        <h1 class="heading">
            <?=__('Фотогалерея')?>
        </h1>
        <div class="tags">
            <span class="tags__heading"><?=__('Категории')?>:</span>
            <a href="/<?=$lang?>albums"><?=__('Все')?></a>
            <?php foreach($categories as $item): ?>
            <a href="/<?=$lang?>albums/category/<?=$item['Category']['id']?>" <?=(isset($this->request->query['cat']) && $this->request->query['cat'] == $item['Category']['id']) ? 'class="active"' : "" ?>><?=$item['Category']['title']?></a>   
            <?php endforeach ?>
        </div>
        <div class="gallery-section">
            <ul class="photogallery-ul">
            
                
                    <?php foreach ($data as $photo):?>
                    
                        <li>
                             <div class="gallery-mini">
                                <a class="gallery-mini__img" href="/<?=$lang?>gallery/view/<?=$photo['Album']['id']?>">
                                    <img src="/img/gallery/thumbs/<?=$photo['Gallery'][0]['img']?>" width="202px">
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
                    
                <?php endforeach ?>
                                                                                           
            </ul>
        </div>
    </div>
</div>