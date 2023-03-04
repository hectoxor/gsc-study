<div class="page_block">
    <div class="container">
    <?php echo $this->element('breadcrumbs') ?>
        <h1 class="title">Услуги</h1>
        <p class="title_text text"><?=$this->Common->get_element(29)?></p>
        <div class="services_block">
             <?php foreach($data as $item): ?>
            <div class="serv_item">
                <div class="serv_img" style="background-image: url(/img/services/<?=$item['Service']['img']?>);"></div>
                <a href="/service/<?=$item['Service']['alias']?>" class="serv_name"><?=$item['Service']['title']?></a>
                <p class="text"><?= $this->Text->truncate(strip_tags($item['Service']['body']), 462, array('ellipsis' => '...', 'exact' => true)) ?></p>
                <a href="/service/<?=$item['Service']['alias']?>" class="more blue_btn">Подробнее</a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>