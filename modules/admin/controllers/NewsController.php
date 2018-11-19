<?php

namespace app\modules\admin\controllers;

use app\models\Slider;
use app\models\UploadSlider;
use Yii;
use app\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find(),
            'sort'=> ['defaultOrder' => ['id' => SORT_DESC]],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $slider = new UploadSlider();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->date = date('Y-m-d H:i:s');
            $model->save();
            $slider->img = UploadedFile::getInstances($slider,'img');
            $slider->upload();
            foreach ($slider->img as $item) {
                $sl = new Slider();
                $sl->img ='/web/uploads/'. $item->name;
                $sl->post_id = $model->id;
                $sl->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'slider' => $slider,
            'slider_update' => '',
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $slider = new UploadSlider();
        $slider_update = Slider::find()->where(['post_id'=>$model->id])->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->date = date('Y-m-d H:i:s');
            $model->save();
            $slider->img = UploadedFile::getInstances($slider,'img');
            $slider->upload();
            foreach ($slider->img as $item) {
                $sl = new Slider();
                $sl->img ='/web/uploads/'. $item->name;
                $sl->post_id = $model->id;
                $sl->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'slider' => $slider,
            'slider_update' => $slider_update,
        ]);
    }

    public function actionSliderdelete(){
        if(Yii::$app->request->isAjax){
            Slider::deleteAll(['id'=>Yii::$app->request->post('id')]);
            return true;
        }

    }
    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        Slider::deleteAll(['post_id'=>$id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
