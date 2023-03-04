<div class="second-page">
    <div class="container">
        <div class="title middle-text">
            <?=$title_for_layout?>
        </div>
        <ul class="gallery-list">
            <?php foreach($data['Gallery'] as $item): ?>
            <li >
                <div class="gallery-item">
                    <a href="/img/gallery/<?=$item['img']?>" data-fancybox="group" class="gallery-item__img">
                        <img src="/img/gallery/thumbs/<?=$item['img']?>" alt="">
                    </a>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>