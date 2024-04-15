<!-- home section start  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'm <span><?= $info->last_name ?> <?= $info->first_name ?></span> </h1>
    <p>
        <?= $info->content ?>
    </p>
    <a href="#about"><button class="btn">About me <i class="fas fa-user"></i></button></a>


</section>

<!-- home section end  -->