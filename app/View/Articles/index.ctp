<div class="content">
    <div class="head-second-page" style="background-image: url(/img/language_program_head.png);">
        <div class="container">
            <?=$this->element('breadcrumbs')?>
            <h1 class="second-page-title">
                 Статьи образовательного центра GSC
            </h1>
        </div>
    </div>
    
    <div class="section ">
        <div class="container">
        
            <ul class="news-ul news-ul-second-page">
                <?php foreach($news as $item): ?>
                <li>
                    <div class="news-item way">
                        <a class="news-item__img" href="/article/<?=$item['Article']['alias']?>" style="background-image: url(/img/articles/<?=$item['Article']['img']?>)"></a>
                        <div class="news-item__text">
                            <a href="/article/<?=$item['Article']['alias']?>" class="news-item__heading"><?=$item['Article']['title']?></a>
                            <p><?= $this->Text->truncate(strip_tags($item['Article']['body']), 102, array('ellipsis' => '...', 'exact' => true)) ?></p>
                            <div class="news-item__bot">
                                <a class="news-item__link" href="/article/<?=$item['Article']['alias']?>">Подробнее </a>
                                <span class="news-item__date"><?=$this->Time->format($item['Article']['date'], '%d.%m.%Y', 'invalid'); ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach ?>
                
            </ul>
        </div>      
    </div>
    <?=$this->element('footer') ?>
</div>