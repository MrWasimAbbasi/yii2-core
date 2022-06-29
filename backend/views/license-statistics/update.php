<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LicenseStatistics */

$this->title = Yii::t('app', 'Update License Statistics: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'License Statistics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="license-statistics-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
