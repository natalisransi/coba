<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MbKecamatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mb Kecamatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-kecamatan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mb Kecamatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mb_kecamatan_id',
            'mb_kabupaten_kota_id',
            'mb_kecamatan_kode',
            'mb_kecamatan_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
