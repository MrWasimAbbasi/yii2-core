<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LicenseStatisticsFilter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="license-statistics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'license_no') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'father_name') ?>

    <?= $form->field($model, 'cnic') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'licence_category') ?>

    <?php // echo $form->field($model, 'issue_date') ?>

    <?php // echo $form->field($model, 'expiry_date') ?>

    <?php // echo $form->field($model, 'other_information') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
