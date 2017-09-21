<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MbProvinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mb-provinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mb_provinsi_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mb_provinsi_nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
