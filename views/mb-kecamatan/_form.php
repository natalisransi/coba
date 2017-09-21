<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MbKecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="simple">

<?php $form = ActiveForm::begin([
    'id' => 'kecamatan',
    'enableClientValidation'=>false,
    'validateOnSubmit' => true, // this is redundant because it's true by default
]); ?>

    
    
<?php 
echo Html::dropDownList("provinsi_id", [""]);
    Html::lislistData(app\models\MbProvinsi::model()->findAll(),'provinsi_id','mb_provinsi_nama'),
 array(

'prompt'=>'Pilih Propinsi',          //

'value'=>'0',

'ajax' => array(

'type'=>'POST', //request type

'url'=>CController::createUrl('filterkab'), // panggi filter kabupaten di controller

'update'=>'#Kecamatan_'.mb_kabupaten_id, //selector to update

'data'=>array('mb_provinsi_id'=>'js:this.value'),

))); ?>

</div>

<div class="simple">

<?php 

echo $form->dropDownList($model,'mb_kabupaten_kota_id',
            CHtml::listData(\app\models\MbKabupatenKota::model()->findAll(),'mb_kabupaten_kota_id','mb_kabupaten_nama'),
 array(

'prompt'=>'Pilih Kabupaten',          //

'value'=>'0',

'ajax' => array(

'type'=>'POST', //request type

'url'=>CController::createUrl('filterkec'), // panggil method di controller 

'update'=>'#Kecamatan_'.mb_kecamatan_id, //selector to update

'data'=>array('mb_kabupaten_kota_id'=>'js:this.value'),

))); ?>

</div>

<?php echo $form->dropDownList($model,'mb_kecamatan_id',array(),
 array( 'prompt'=>'Pilih Dulu.','value'=>'0')) ?>

</div>
<?php $this->endWidget(); ?>