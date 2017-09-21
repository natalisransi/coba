<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MbKabupatenKota */

$this->title = $model->mb_kabupaten_kota_id;
$this->params['breadcrumbs'][] = ['label' => 'Mb Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-kabupaten-kota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mb_kabupaten_kota_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mb_kabupaten_kota_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mb_kabupaten_kota_id',
            'mb_provinsi_id',
            'mb_kabupaten_kota_kode',
            'mb_kabupaten_nama',
        ],
    ]) ?>

</div>
