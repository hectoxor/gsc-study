<section class="section director">
    <div class="container">
        <?php if (isset($teams) && $teams) : ?>
            <div class="lang-courses__item director__item">
                <div class="lang-courses__item-info">
                    <p class="pos"><?= $teams[0]['Team']['position'] ?></p>
                    <h1 class="title">
                        <?= $teams[0]['Team']['title'] ?>
                    </h1>
                    <div class="lang-courses__item-texts director__item-texts">
                        <?= $teams[0]['Team']['body'] ?>
                    </div>
                </div>
                <div class="lang-courses__item-pic">
                    <img src="/img/teams/<?= $teams[0]['Team']['img'] ?>" alt="<?= $teams[0]['Team']['title'] ?>">
                </div>
            </div>
        <?php endif; ?>
        <div class="about-company">
            <h2 class="title-sec"><?= $page['Page']['h1'] ?></h2>
            <div class="text">
                <?= $page['Page']['body'] ?>
            </div>
        </div>
    </div>
</section>