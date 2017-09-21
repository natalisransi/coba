<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MbKecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mb-kecamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mb_kabupaten_kota_id')->textInput() ?>

    <?= $form->field($model, 'mb_kecamatan_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mb_kecamatan_nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
