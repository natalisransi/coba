<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\models\Author;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Book', ['value' => Url::to('index.php?r=book/create'), 'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <?php 
        Modal::begin([
            'header' => '<h4>Books</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        echo "<div id='modalContent'> </div>";
        Modal::end();
    ?>
    
<?php    Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'isbn',
            'rank',
            //'author_id',
            
            [
                'attribute'=>'author_id',
                'value'=>'author.firstname',
                'filter' => Html::activeDropDownList($searchModel, 'author_id', ArrayHelper::map(Author::find()->asArray()->all(),'author_id','firtname'),['class'=>'form-control','prompt'=>'Pilih']),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php    Pjax::end();?>
</div>
