<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


 

/* @var $this yii\web\View */
/* @var $model app\models\BookSell */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-sell-form">

    <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'book_id')->textInput(['maxlength' => true]) ?>
  <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
