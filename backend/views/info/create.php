<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Info $model */

$this->title = Yii::t('app', 'Create Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
