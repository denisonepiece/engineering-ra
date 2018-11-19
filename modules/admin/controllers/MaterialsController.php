<?php

namespace app\modules\admin\controllers;

use app\models\Doc;
use app\models\Section;
use app\models\UploadFile;
use Yii;
use app\models\Materials;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MaterialsController implements the CRUD actions for Materials model.
 */
class MaterialsController extends Controller
{
    public function init()
    {
        if(Yii::$app->user->isGuest){
            return $this->redirect('/admin/login/');
        }
        parent::init();


    }
    /**
     * {@inheritdoc}
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
     * Lists all Materials models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Materials::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Materials model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Materials model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Materials();
        $doc = Doc::find()->orderBy(['id' => SORT_ASC])->all();
        $doc = ArrayHelper::map($doc,'id','title');
        $section = Section::find()->orderBy(['id' => SORT_ASC])->all();
        $section = ArrayHelper::map($section,'id','title');
        $file = new UploadFile();
        if ($model->load(Yii::$app->request->post())) {
            if (!Yii::$app->request->post('content')) {
                $file->img = UploadedFile::getInstance($file, 'img');
                if ($file->img !== null) {
                    $file->upload();
                    $model->content = '/web/uploads/' . $file->img->name;
                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'doc' => $doc,
            'section' => $section,
            'file' => $file,
        ]);
    }

    /**
     * Updates an existing Materials model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $doc = Doc::find()->orderBy(['id' => SORT_ASC])->all();
        $doc = ArrayHelper::map($doc,'id','title');
        $section = Section::find()->orderBy(['id' => SORT_ASC])->all();
        $section = ArrayHelper::map($section,'id','title');
        $file = new UploadFile();
        if ($model->load(Yii::$app->request->post())) {
            if (!Yii::$app->request->post('content')) {
                $file->img = UploadedFile::getInstance($file, 'img');
                if ($file->img !== null) {
                    $file->upload();
                    $model->content = '/web/uploads/' . $file->img->name;
                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'doc' => $doc,
            'section' => $section,
            'file' => $file,
        ]);
    }

    /**
     * Deletes an existing Materials model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Materials model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Materials the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Materials::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
