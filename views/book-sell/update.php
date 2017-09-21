<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookSell */

$this->title = 'Update Book Sell: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Book Sells', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-sell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
