<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MbKabupatenKota */

$this->title = 'Update Mb Kabupaten Kota: ' . $model->mb_kabupaten_kota_id;
$this->params['breadcrumbs'][] = ['label' => 'Mb Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mb_kabupaten_kota_id, 'url' => ['view', 'id' => $model->mb_kabupaten_kota_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mb-kabupaten-kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
