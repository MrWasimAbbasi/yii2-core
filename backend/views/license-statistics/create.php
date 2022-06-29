<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LicenseStatistics */

$this->title = Yii::t('app', 'Create License Statistics');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'License Statistics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="license-statistics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
