<?php

namespace app\modules\admin\controllers;

use app\models\FieldOfActivity;
use app\models\TypeCompany;
use Yii;
use app\models\Company;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompanyController implements the CRUD actions for Company model.
 */
class CompanyController extends Controller
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
     * Lists all Company models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Company::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Company model.
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
     * Creates a new Company model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Company();
        $type = TypeCompany::find()->orderBy(['id' => SORT_ASC])->all();
        $type = ArrayHelper::map($type,'id','name');
        $activity = FieldOfActivity::find()->orderBy(['id' => SORT_ASC])->all();
        $activity = ArrayHelper::map($activity,'id','name');
        if ($model->load(Yii::$app->request->post())) {
            $model->activity = json_encode($model->activity);
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'type' => $type,
            'activity' => $activity,
        ]);
    }

    /**
     * Updates an existing Company model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $type = TypeCompany::find()->orderBy(['id' => SORT_ASC])->all();
        $type = ArrayHelper::map($type,'id','name');
        $activity = FieldOfActivity::find()->orderBy(['id' => SORT_ASC])->all();
        $activity = ArrayHelper::map($activity,'id','name');

        $activity_current = FieldOfActivity::find()->where(['id'=>json_decode($model->activity, true)])->orderBy(['id' => SORT_ASC])->all();
        $activity_current = ArrayHelper::map($activity_current,'id','name');
        $a=[];
        foreach ($activity_current as $key=>$value){
            $a[]=$key;
        }
        $activity_current = $a;
        if ($model->load(Yii::$app->request->post())) {
            $model->activity = json_encode($model->activity);
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $model->activity = $activity_current;
        return $this->render('update', [
            'model' => $model,
            'type' => $type,
            'activity' => $activity,
        ]);
    }

    /**
     * Deletes an existing Company model.
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
     * Finds the Company model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Company the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Company::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
