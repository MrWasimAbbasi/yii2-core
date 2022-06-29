<?php

use app\models\LicenseStatistics;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LicenseStatisticsFilter */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'License Statistics');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="license-statistics-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create License Statistics'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
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
            //'other_information:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LicenseStatistics $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
