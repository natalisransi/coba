<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MbKabupatenKota */

$this->title = 'Create Mb Kabupaten Kota';
$this->params['breadcrumbs'][] = ['label' => 'Mb Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-kabupaten-kota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
