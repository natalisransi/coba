<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BookSell */

$this->title = 'Create Book Sell';
$this->params['breadcrumbs'][] = ['label' => 'Book Sells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-sell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
