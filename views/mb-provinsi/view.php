<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MbProvinsi */

$this->title = $model->mb_provinsi_id;
$this->params['breadcrumbs'][] = ['label' => 'Mb Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-provinsi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mb_provinsi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mb_provinsi_id], [
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
            'mb_provinsi_id',
            'mb_provinsi_kode',
            'mb_provinsi_nama',
        ],
    ]) ?>

</div>
