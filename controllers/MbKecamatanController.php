<?php

namespace app\controllers;

use Yii;
use app\models\MbKecamatan;
use app\models\MbKecamatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MbKecamatanController implements the CRUD actions for MbKecamatan model.
 */
class MbKecamatanController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MbKecamatan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MbKecamatanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MbKecamatan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MbKecamatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MbKecamatan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->mb_kecamatan_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MbKecamatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->mb_kecamatan_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MbKecamatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MbKecamatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MbKecamatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MbKecamatan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    
    public function actionFilterkab()
	{

  	   $data= \app\models\MbKabupatenKota::model()->findAll('mb_provinsi_id=:mb_provinsi_id',
                     array(':mb_provinsi_id'=>(int) $_POST['mb_provinsi_id']));

    	   $data=CHtml::listData($data,'mb_kabupaten_kota_id','mb_kabupaten_id');
    	   foreach($data as $value=>$name)
    	   {
        	echo CHtml::tag('option',array('value'=>$value),CHtml::encode($name),true);
    	   }	

	}

	public function actionFilterkec()
	{

  	   $data=Kecamatan::model()->findAll('mb_kabupaten_kota_id=:mb_kabupaten_kota_id',
                    array(':mb_kabupaten_kota_id'=>(int) $_POST['mb_kabupaten_kota_id']));

    	   $data=CHtml::listData($data,'idkecamatan','nama');
    	   foreach($data as $value=>$name)
    	   {
        	echo CHtml::tag('option',array('value'=>$value),CHtml::encode($name),true);
    	   }
	}
    
    
    
}
