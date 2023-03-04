<div class="content">
    <div class="content-top">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="/<?= $lang ?>">Главная </a>
                </li>
                <li>
                    <span>Новости</span>
                </li>
            </ol>
            <h1 class="title">Новости</h1>
        </div>    
    </div>
    <section class="section news-page">
        <div class="container">
            <div class="news__items">
                <?php foreach( $news as $item ): ?>
                    <div class="news__item way">
                        <div class="news-item">
                            <a href="/<?= $lang ?>news/<?= $item['News']['alias'] ?>" class="news__item-pic pic-increase">
                                <img src="/img/news/thumbs/<?= $item['News']['img'] ?>" alt="">
                            </a>
                            <a href="/<?= $lang ?>news/<?= $item['News']['alias'] ?>" class="news__item-title"><?=$item['News']['title']?></a>
                            <p><?= $this->Text->truncate(strip_tags($item['News']['body']), 102, array('ellipsis' => '...', 'exact' => true)) ?></p>
                            <a href="/<?= $lang ?>news/<?= $item['News']['alias'] ?>" class="moree">Читать подробнее</a>
                        </div>
                    </div>    
                <?php endforeach; ?>
            </div>
            <div class="pagi">     
                <div class="pag-bot">
                    <ul class="pagination">
                        <li class="pag-bot__arrow"><?php echo $this->Paginator->first('<<'); ?></li>
                        <?php echo $this->Paginator->numbers(
                            array(
                                'separator' => '',
                                'tag' => 'li',
                                'modulus' => 4
                                )
                        ); ?>
                        <li class="pag-bot__arrow"><?php echo $this->Paginator->last('>>'); ?></li>
                    </ul>
                </div>  
            </div>
        </div>
    </section>
</div>