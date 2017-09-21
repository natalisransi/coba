<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MbProvinsi */

$this->title = 'Create Mb Provinsi';
$this->params['breadcrumbs'][] = ['label' => 'Mb Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mb-provinsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
