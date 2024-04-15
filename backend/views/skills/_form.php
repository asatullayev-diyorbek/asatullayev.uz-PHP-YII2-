<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Skills $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skills-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'github')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill1_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill1')->textInput() ?>

    <?= $form->field($model, 'skill2_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill2')->textInput() ?>

    <?= $form->field($model, 'skill3_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill3')->textInput() ?>

    <?= $form->field($model, 'skill4_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill4')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
