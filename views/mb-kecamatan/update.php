<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MbKecamatan */

$this->title = 'Update Mb Kecamatan: ' . $model->mb_kecamatan_id;
$this->params['breadcrumbs'][] = ['label' => 'Mb Kecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mb_kecamatan_id, 'url' => ['view', 'id' => $model->mb_kecamatan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mb-kecamatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
