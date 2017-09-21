<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book Sells';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-sell-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Book Sell', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'], 'id',
     
                [
                    'attribute' => 'book_id',
                    'value' => 'book.title',
                ],
            
            'ket:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

