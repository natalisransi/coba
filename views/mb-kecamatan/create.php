<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MbKecamatan */

$this->title = 'Create Mb Kecamatan';
$this->params['breadcrumbs'][] = ['label' => 'Mb Kecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-kecamatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
