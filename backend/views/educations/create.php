<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Educations $model */

$this->title = Yii::t('app', 'Create Educations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Educations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="educations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
