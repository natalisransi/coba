<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MbProvinsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mb Provinsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-provinsi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mb Provinsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mb_provinsi_id',
            'mb_provinsi_kode',
            'mb_provinsi_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
