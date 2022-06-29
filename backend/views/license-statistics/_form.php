<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LicenseStatistics */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="license-statistics-form">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'license_no')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'licence_category')->dropDownList(['New', 'Renewal', 'Upgradation']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'issue_date')->textInput(['class' => 'form-control calendar', 'maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'expiry_date')->textInput(['class' => 'form-control calendar', 'maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'other_information')->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
$this->registerJs(<<< EOT_JS_CODE

    $('.calendar').datepicker();

EOT_JS_CODE
);
?>