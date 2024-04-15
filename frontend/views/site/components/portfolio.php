<!-- portfolio section start  -->

<section class="portfolio section" id="portfolio">

    <h1 class="heading"> my <span>portfolio</span></h1>

    <div class="box-container">
        <?php foreach ($portfolio as $p): ?>
        <a href="http://<?= $p->link ?>" class="box" target="_blank">
            <img src='/backend/web/<?= $p->img ?>'>

            <span><?= $p->title ?> <br> <?= $p->date ?></span>
        </a>
        <?php endforeach; ?>
    </div>


</section>

<!-- portfolio section end -->