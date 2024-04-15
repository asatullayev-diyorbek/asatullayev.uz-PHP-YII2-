<?php
/** @var yii\web\View $this */

use yii\bootstrap4\Alert;

$this->title = 'Asatullayev Diyorbek | Portfolio';
?>

<?php
foreach (Yii::$app->session->getAllFlashes() as $key => $message):?>
    <?= Alert::widget([
        'options' => ['class' => 'flash alert-success'],
        'body' => $message['flash'] . ' ' . $message['name']
    ]) ?>
<?php endforeach; ?>

<?php
//    home
require "components/home.php";

//    about
require "components/about.php";

//    education
require "components/education.php";

//    portfolio
require "components/portfolio.php";

//    contact
require "components/contact.php";
?>

