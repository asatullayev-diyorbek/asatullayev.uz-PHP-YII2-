<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!-- contact section start  -->

<section class="contact section" id="contact">

    <h1 class="heading"> <span>Contact</span> me </h1>

    <div class="row">

        <div class="content">

            <div class="title">contact info</div>

            <div class="info">
                <h3><i class="fa fa-envelope"></i><a href="mailto:<?= $skills['email'] ?>"><?= $skills['email'] ?></a></h3>
                <h3><i class="fa fa-phone"></i><a href="tel:<?= $skills['phone'] ?>"><?= $skills['phone'] ?></a></h3>
                <h3><i class="fa fa-telegram"></i><a target="_blank" href="https://t.me/<?= $skills['telegram'] ?>">telegram</a></h3>
                <h3><i class="fa fa-github"></i><a target="_blank" href="https://github.com/<?= $skills['github'] ?>">github</a></h3>
                <h3><i class="fa fa-map"></i><?= $skills['address'] ?></h3>
            </div>

        </div>

            <?php $form = ActiveForm::begin(['action' => ['site/xabar']]); ?>

            <?= $form->field($xabarlar, 'name')->textInput(['maxlength' => true, 'class' => 'box', 'placeholder' => 'Name']) ?>

            <?= $form->field($xabarlar, 'email')->textInput(['maxlength' => true, 'class' => 'box', 'placeholder' => 'email']) ?>

            <?= $form->field($xabarlar, 'theme')->textInput(['maxlength' => true, 'class' => 'box', 'placeholder' => 'Theme']) ?>

            <?= $form->field($xabarlar, 'message')->textarea(['rows' => 6, 'class' => 'box', 'placeholder' => 'Message']) ?>

            <?php // $form->field($xabarlar, 'created_at')->textInput() ?>

            <?= Html::submitButton("send <i class='fas fa-paper-plane'></i>", ['class' => 'btn btn-success']) ?>

            <?php ActiveForm::end(); ?>


        <!--<form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="text" placeholder="project" class="box">
            <textarea name="message" id="message" rows="10" placeholder="message" class="box message"></textarea>
            <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>
        </form> -->

    </div>

</section>

<!-- contact section end -->