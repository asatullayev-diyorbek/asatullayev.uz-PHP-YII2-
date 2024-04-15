<!-- education section start  -->

<section class="education section" id="education">

    <h1 class="heading"> my <span>education</span> </h1>

    <div class="box-container">

        <?php foreach ($educations as $education): ?>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span><?= $education['start_year'] ?> - <?= $education['end_year'] ?></span>
            <h3><?= $education['title'] ?></h3>
            <p>
                <?= $education['content'] ?>
            </p>
        </div>
        <?php endforeach; ?>

    </div>

</section>

<!-- education section end -->