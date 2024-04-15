<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <?php $this->head() ?>
</head>
<body>
<?php //$this->beginBody() ?>

    <header>
        <div class="user">
            <img src="/backend/web/<?= $this->params['info']->img ?>" alt="">
            <h3 class="name">I'm <?= Html::encode((count_chars($this->params['info']->first_name) < count_chars($this->params['info']->last_name))?$this->params['info']->first_name:$this->params['info']->last_name) ?></h3>
            <p class="post"><?= $this->params['info']->job ?></p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home" class="active">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="menu" class="fas fa-bars"></div>

    <?= $content ?>

    <a href="#home" class="top">
        <img width="64" height="64"
             src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-rocket-achievements-flaticons-flat-flat-icons-2.png"
             alt="external-rocket-achievements-flaticons-flat-flat-icons-2" />
    </a>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
