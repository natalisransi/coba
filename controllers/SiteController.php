<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;



class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       // return $this->render('index');
        
      /*  $cmd = Yii::$app->db->createCommand('SELECT * from {{%book}} ORDER BY [[rank]] DESC  LIMIT 5');
        $provider = new \yii\data\ArrayDataProvider([
            'allModels' => $cmd->queryAll(),
        ]);
        return $this->render('index',[
            'dataProvider' => $provider,
        ]);*/
        
        $cmd = Yii::$app->db->createCommand('select * from {{%author}}');
        $provider = new \yii\data\ArrayDataProvider([
            'allModels' => $cmd->queryAll(),
        ]);
        return $this->render('index',[
            'dataProvider' => $provider,
        ]);
       /*
        $query =  new \yii\db\Query;
        $provider = new \yii\data\ArrayDataProvider([
            'allModels' => $query->from('{{%book}}')->orderBy('[[rank]]')->limit(13)->all(),
        ]);
        return $this->render('index',[
           'dataProvider'=>$provider, 
        ]);
        */
        
                
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionNama()
    {
        $nama = "Natalis Ransi";
        $alamat = "Kendari";
        $matakuliah = ['jaringan 1','jaringan 2','jaringan 3'];
        return $this->render('namaku',[
            'nama' =>$nama,
                'alamatku' => $alamat,
            'makul' =>$matakuliah
     
        ]);
    }
}
