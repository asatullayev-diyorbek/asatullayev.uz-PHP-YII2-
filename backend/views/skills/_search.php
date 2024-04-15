<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\SkillsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skills-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'telegram') ?>

    <?= $form->field($model, 'github') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'skill1_title') ?>

    <?php // echo $form->field($model, 'skill1') ?>

    <?php // echo $form->field($model, 'skill2_title') ?>

    <?php // echo $form->field($model, 'skill2') ?>

    <?php // echo $form->field($model, 'skill3_title') ?>

    <?php // echo $form->field($model, 'skill3') ?>

    <?php // echo $form->field($model, 'skill4_title') ?>

    <?php // echo $form->field($model, 'skill4') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
