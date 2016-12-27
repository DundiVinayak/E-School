<?php

namespace frontend\controllers;

use Yii;
use frontend\models\School;
use frontend\models\SchoolSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * SchoolController implements the CRUD actions for School model.
 */
class SchoolController extends Controller
{
    public function behaviors()
    {
        return [

            // 'access'=>[
            //     'class'=> AccessControl::className(),
            //     'only'=>['create','update','delete'],
            //     'rules'=>[
            //         'allow'=>true,
            //         'roles'=>['@'],
            //     'matchCallback' => function() {
            //                                     return date('d-m') === '31-10';                    
            //                                     }
            //     ],

            // ],

            // 'access' => [
            //                     'class' => AccessControl::className(),
            //                     'rules' => [
            //                             [
            //                                     'actions' => ['view'],
            //                                     'allow' => true,
            //                                     'roles' => ['?'],
            //                             ],
            //                             [
            //                                     'actions' => ['index', 'update','view','delete'],
            //                                     'allow' => true,

            //                                     'matchCallback' => function() {
            //                                          return \Yii::$app->user;
                                                                    
            //                                     }
            //                             ],
            //                     ],
            //             ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
    *
     * Lists all School models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SchoolSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single School model.
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
     * Creates a new School model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new School();
        //$this->performAjaxValidation($model);
        if ($model->load(Yii::$app->request->post())) {
            
            $model->registered_at = date('Y-m-d h:m:s');
            $model->user_id = Yii::$app->user->id;
            $model->save(false);
            //////////////////////////////////
            
            //  $imageName = "y";
            // $model->file = UploadedFile::getInstance($model, 'file');
            // $model->file->saveAs('uploads/'.$imageName .'.'. $model->file->extension);

            // //saving to database
            // $model->logo = 'uploads/' .$imageName .'.' .$model->file->extension;
            // $model->save();
            
            /////////////////////////////////
            
            
//            return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect('index.php/?r=faculty/create',302);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
        // if(isset($_POST['School'])){
        //     $model->attributes=$_POST['School'];
        //     $model->create();
        //     $model->registered_at = date('Y-m-d h:m:s');
        //     $model->user_id = Yii::$app->user->id;
        //     if($model->save())
        //         $this->redirect(array('view','id'=>$model->id));
        // }

    }

    /**
     * Updates an existing School model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->registered_at = date('Y-m-d h:m:s');
            $model->user_id = Yii::$app->user->id;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdateFaculty($id){
        return $this->redirect('index.php/?r=faculty/index',302);
    }

    /**
     * Deletes an existing School model.
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
     * Finds the School model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return School the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = School::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
