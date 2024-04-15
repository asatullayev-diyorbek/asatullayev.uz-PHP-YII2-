<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Educations $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="educations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_year')->textInput() ?>

    <?= $form->field($model, 'end_year')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
