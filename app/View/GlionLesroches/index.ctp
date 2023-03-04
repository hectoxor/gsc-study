<div class="content">
    <div class="content-top">
        <div class="container">
            <h1 class="title"><?= $h1_text ?></h1>
            <nav class="page-header-nav">
                <ul>
                    <li><a href="javascript:;">Языковые курсы за рубежом</a></li>
                    <li><a href="/<?= $lang ?>secondary_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Среднее образование</a></li>
                    <li><a href="/<?= $lang ?>higher_educations<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Высшее образование</a></li>
                    <li class="<?= (isset($_GET['type']) && $_GET['type'] == 'glion') ? 'active' : '' ?> ">
                        <a href="/<?= $lang ?>glion_lesroches?type=glion<?=($this->Session->check('city')) ? '&city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Glion</a>
                    </li>
                    <li class="<?= (isset($_GET['type']) && $_GET['type'] == 'les_roches') ? 'active' : '' ?>">
                        <a href="/<?= $lang ?>glion_lesroches?type=les_roches<?=($this->Session->check('city')) ? '&city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Les Roches</a>
                    </li>
                    <li class=""><a href="/<?= $lang ?>courses<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Летние каникулы за рубежом</a></li>
                    <li class=""><a href="/<?= $lang ?>contacts<?=($this->Session->check('city')) ? '?city=' . $this->Session->read('city') : '?city=nur-sultan' ?>">Контакты</a></li>
                </ul>
            </nav>
        </div>    
    </div>
    <?php if( isset($data) && $data ): ?>
    	<section class="section courses-aroad">
            <div class="container">
                <div class="courses-aroad__items">
                    <?php foreach( $data as $item ): ?>
                        <div class="courses-aroad__item">
                            <a href="/<?= $lang ?>glion_lesroche/<?= $item['GlionLesroche']['alias'] ?>" class="courses-aroad__item-pic pic-increase">
                                <img src="/img/glion_lesroches/<?= $item['GlionLesroche']['img'] ?>" alt="">
                            </a>
                            <a href="/<?= $lang ?>glion_lesroche/<?= $item['GlionLesroche']['alias'] ?>" class="courses-aroad__item-title"><?= $item['GlionLesroche']['title'] ?></a>
                            <a href="/<?= $lang ?>glion_lesroche/<?= $item['GlionLesroche']['alias'] ?>" class="btn more">Подробнее</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="section req">
        <div class="container">
            <h2 class="title">подберем для вас учебное заведение</h2>
            <div class="request">
                <form class="form" action="/requests/sendAbroad" method="POST">
                    <div class="input-parent">
                        <input class="form_input" type="text" name="name" placeholder="Фамилия Имя Отчество" required="">
                        <input class="form_input" type="email" name="mail" placeholder="Электронная почта" required="">
                        <input class="form_input" type="tel" name="phone" placeholder="Номер телефона" required="">

                        <input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
                        <input name="page" value="Университет Glion Institute of Higher Education" type="hidden">
                        <?php if($this->Session->check('city')): ?>
                            <input type="hidden" name="city" value="<?=$this->Common->get_city($this->Session->read('city'))?>">
                        <?php else: ?>
                           <input type="hidden" name="city" value="Нур-Султан"> 
                        <?php endif ?>
                    </div>
                    <div class="input-parent input-parent--sec">
                        <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>
                    </div>
                    <button class="btn more" type="submit">Оставить заявку</button>
                </form>
            </div>
        </div>
    </section>
</div>