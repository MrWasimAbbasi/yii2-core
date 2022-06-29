<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LicenseStatistics */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'License Statistics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="license-statistics-view">


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'license_no',
            'name',
            'father_name',
            'cnic',
            'address',
            'licence_category',
            [
                'label' => 'Issue',
                'attribute' => 'issue_date',
                'value' => function ($model) {
                    return date('d, M Y', strtotime($model->expiry_date));
                }
            ],
            [
                'attribute' => 'expiry_date',
                'value' => function ($model) {
                    return date('d, M Y', strtotime($model->expiry_date));
                }
            ],
            'other_information:ntext',
        ],
    ]) ?>

</div>
