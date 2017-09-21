<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MbKabupatenKotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mb Kabupaten Kotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-kabupaten-kota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mb Kabupaten Kota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mb_kabupaten_kota_id',
            'mb_provinsi_id',
            'mb_kabupaten_kota_kode',
            'mb_kabupaten_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
