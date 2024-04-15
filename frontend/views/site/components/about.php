<!-- about section start  -->
<?php
use yii\helpers\Html;
?>
<section class="about section" id="about">

    <h1 class="heading"> <span>about</span> me </h1>

    <div class="row">

        <div class="info">
            <h3> <span>name : </span> <?= $info->last_name ?> <?= $info->first_name ?></h3>
            <h3> <span>age : </span> <?= $info->age ?> </h3>
            <h3> <span>post : </span> <?= $info->job ?></h3>
            <h3> <span>gender : </span> <?= ($info->gender==1)? 'male': 'female' ?></h3>
            <h3> <span>language : </span><?= $info->language ?></h3>
            <a href="<?= $info->cv_link ?>" target="_blank"><button class="btn">dowload CV <i class="fas fa-download"></i></button></a>

        </div>

        <div class="counter">

            <?php for ($i=1;$i<=4;$i++): ?>
            <div class="box">
                <span><?= $skills['skill'.$i] ?>+ / 5</span>
                <h3><?= $skills['skill'.$i.'_title'] ?></h3>
            </div>
            <?php endfor; ?>

        </div>

    </div>

</section>

<!-- about section end -->