<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Skills $model */

$this->title = Yii::t('app', 'Create Skills');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Skills'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skills-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
