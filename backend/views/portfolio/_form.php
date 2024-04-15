<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Portfolio $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="portfolio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->Input('month') ?>

    <div class='inputRasm'>
        <?= $form->field($model, 'img')->fileInput(['accept' => 'image/*', 'onchange'=>"previewImage(this)"]) ?>
        <div class='rasm' id="rasmContainer"></div>
        <div class="rasm">
            <?php if(!empty($model->img)):?>
                <p>Eski rasm</p>
                <img src="/backend/web/<?= $model->img ?>" alt="eski rasm">
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



<style>

    .inputRasm {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    img{
        width: 100px;
        border: 3px  solid #343A40;
        border-radius: 10px;
    }
</style>

<script>
    function previewImage(input) {
        var rasmContainer = document.getElementById('rasmContainer');
        rasmContainer.innerHTML = '';

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                var p = document.createElement('p');
                p.textContent = "Yangi rasm";
                img.src = e.target['result'];
                rasmContainer.appendChild(p);
                rasmContainer.appendChild(img);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>