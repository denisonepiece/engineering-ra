<?php

namespace app\modules\admin\controllers;

use app\models\Slider;
use app\models\Sliderservices;
use app\models\UploadFile;
use app\models\UploadImage;
use app\models\UploadSlider;
use Yii;
use app\models\Services;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ServicesController implements the CRUD actions for Services model.
 */
class ServicesController extends Controller
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
     * Lists all Services models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Services::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Services model.
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
     * Creates a new Services model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Services();
        $img = new UploadImage();
        $slider = new UploadSlider();
        $file = new UploadFile();
        if ($model->load(Yii::$app->request->post())) {
            $img->img = UploadedFile::getInstance($img,'img');
            $slider->img = UploadedFile::getInstances($slider,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }
            $file->img = UploadedFile::getInstance($file, 'img');
            if ($file->img !== null) {
                $file->upload();
                $model->material = '/web/uploads/' . $file->img->name;
            }
            $slider->upload();
            $model->save();
            foreach ($slider->img as $item) {
                $sl = new Sliderservices();
                $sl->img ='/web/uploads/'. $item->name;
                $sl->id_services = $model->id;
                $sl->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'img' => $img,
            'slider' => $slider,
            'file' => $file,
        ]);
    }

    /**
     * Updates an existing Services model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $slider_update = Sliderservices::find()->where(['id_services' => $model->id])->all();
        $img = new UploadImage();
        $slider = new UploadSlider();
        $file = new UploadFile();
        if ($model->load(Yii::$app->request->post())) {
            $img->img = UploadedFile::getInstance($img,'img');
            $slider->img = UploadedFile::getInstances($slider,'img');
            if($img->img!==null) {
                $img->upload();
                $model->img = '/web/uploads/' . $img->img->name;
            }
            $file->img = UploadedFile::getInstance($file, 'img');
            if ($file->img !== null) {
                $file->upload();
                $model->material = '/web/uploads/' . $file->img->name;
            }
            $slider->upload();
            $model->save();
            foreach ($slider->img as $item) {
                $sl = new Sliderservices();
                $sl->img ='/web/uploads/'. $item->name;
                $sl->id_services = $model->id;
                $sl->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'img' => $img,
            'slider' => $slider,
            'slider_update' => $slider_update,
            'file' => $file,
        ]);
    }

    /**
     * Deletes an existing Services model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        Sliderservices::deleteAll(['id_services' => $id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSliderdelete(){
        if(Yii::$app->request->isAjax){
            Sliderservices::deleteAll(['id'=>Yii::$app->request->post('id')]);
            return true;
        }

    }
    /**
     * Finds the Services model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Services the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Services::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
