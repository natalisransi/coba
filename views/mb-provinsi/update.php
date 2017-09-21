<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MbProvinsi */

$this->title = 'Update Mb Provinsi: ' . $model->mb_provinsi_id;
$this->params['breadcrumbs'][] = ['label' => 'Mb Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mb_provinsi_id, 'url' => ['view', 'id' => $model->mb_provinsi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mb-provinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
