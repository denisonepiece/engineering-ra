<?php

namespace app\controllers;

use app\models\About;
use app\models\CoFounder;
use app\models\Company;
use app\models\Contacts;
use app\models\Doc;
use app\models\FieldOfActivity;
use app\models\Infrastructure;
use app\models\Materials;
use app\models\News;
use app\models\Page;
use app\models\Section;
use app\models\Services;
use app\models\Slider;
use app\models\Slidermain;
use app\models\Sliderservices;
use app\models\Star;
use app\models\Team;
use app\models\TypeCompany;
use app\models\StarForm;
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
     * {@inheritdoc}
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
     * {@inheritdoc}
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
        $slider = Slidermain::find()->all();
        $news = News::find()->orderBy('id', SORT_DESC)->all();
        return $this->render('index',[
            'slider' => $slider,
            'news' => $news,
        ]);
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

        $model->password = '';
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
        $cofounder = CoFounder::find()->asArray()->all();
        $contacts = Contacts::find()->one();
        $team = Team::find()->all();
        return $this->render('contact', [
            'contacts' => $contacts,
            'team' => $team,
            'cofounder' => $cofounder,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $about = About::find()->where(['id'=>1])->one();
        return $this->render('about',[
            'about' => $about,
        ]);
    }
    public function actionNews()
    {

        $news_date = News::find()->groupBy('date')->all();
        $date=[];
        $months = array( 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );
        foreach ($news_date as $item){
            $d=explode('-',$item->date);
            $date[]=$months[(int)$d[1]].' '.$d[0];
        }
        $date = array_unique($date);
        if (Yii::$app->request->get('type')==0){
            $to = Yii::$app->request->get('date_to');
            $do = Yii::$app->request->get('date_do');
            $to = explode(' ',$to)[1]."-".array_search(explode(' ',$to)[0], $months)."-01";
            $do = explode(' ',$do)[1]."-".array_search(explode(' ',$do)[0], $months)."-31";
            $news = News::find()->where(['event'=>Yii::$app->request->get('type')])->andWhere(['between', 'date', $to, $do ])->all();
        }elseif (Yii::$app->request->get('type')==1){
            $to = Yii::$app->request->get('date_to');
            $do = Yii::$app->request->get('date_do');
            $to = explode(' ',$to)[1]."-".array_search(explode(' ',$to)[0], $months)."-01";
            $do = explode(' ',$do)[1]."-".array_search(explode(' ',$do)[0], $months)."-31";
            $news = News::find()->where(['event'=>Yii::$app->request->get('type')])->andWhere(['between', 'date', $to, $do ])->all();
        }else{
            $news = News::find()->orderBy([
                'date' => SORT_DESC,
            ])->all();
        }
//        var_dump($news);
        return $this->render('news',[
            'news' => $news,
            'date' => $date,
        ]);
    }
    public function actionNewsfull()
    {
        $news = News::find()->where(['id'=>Yii::$app->request->get('id')])->one();
        $slider = Slider::find()->where(['post_id'=>$news->id])->all();
        $news_new = News::find()->where(['!=','id',$news->id])->limit(3)->all();
        $news_next = News::find()->all();
        $pre=0;
        $next=0;
        foreach ($news_next as $key=>$nextt){
            if($nextt->id == $news->id){
                if($key<=0){
                    $pre=$nextt->id;
                }else{
                    $pre=$news_next[$key-1]->id;
                }
                if($key>=end(array_keys($news_next))){
                    $next=$nextt->id;
                }else{
                    $next=$news_next[$key+1]->id;
                }
            }
        }
        return $this->render('news-full',[
            'news' => $news,
            'slider' => $slider,
            'news_new' => $news_new,
            'pre' => $pre,
            'next' => $next,
        ]);
    }
    public function actionCompany()
    {
        $company = Company::find()->all();
        $activity = FieldOfActivity::find()->all();
        $type = TypeCompany::find()->all();
        if (Yii::$app->request->get('id_type') && Yii::$app->request->get('id_activity')){
            $company = Company::find()->where(['id_type'=>Yii::$app->request->get('id_type')])
                ->andWhere(['like','activity', Yii::$app->request->get('id_activity')])->all();
        }
        return $this->render('company',[
            'company' => $company,
            'activity' => $activity,
            'type' => $type,
        ]);
    }
    public function actionServices()
    {
        $services = Services::find()->all();
        return $this->render('services',[
            'services' => $services,
        ]);
    }
    public function actionServicesprofile()
    {
        $services = Services::find()->where(['id' => Yii::$app->request->get('id')])->one();
        $slider = Sliderservices::find()->where(['id_services' => $services->id])->all();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())){
            $model->body = "Заявка на услугу ".$services->title."\n
            ФИО: ".$model->name."\n
            mail: ".$model->email."\n
            телефон: ".$model->tel;
            $model->contact('info@engineering-ra.ru');
        }
        return $this->render('servicesprofile',[
            'services' => $services,
            'slider' => $slider,
            'model' => $model,
        ]);
    }

    public function actionMaterials(){
        $materials = Materials::find()->all();
        $doc = Doc::find()->all();
        $section = Section::find()->all();
        return $this->render('materials',[
            'materials' => $materials,
            'doc' => $doc,
            'section' => $section,
        ]);
    }
    public function actionOk(){
        if(Yii::$app->request->isAjax){
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'ok',
                'value' => json_encode(['ok'=> 'ok']),
            ]));
            return true;
        }

    }

//    Новые страницы
    public function actionPage($id) {

        $page = Page::find()->where(['id' => $id])->one();

        return $this->render('page', [
            'page' => $page,
        ]);
    }

    public function actionInfrastructure() {
        $infstr = Infrastructure::find()->all();
        $model = new StarForm();
        $mode = new Star();
        if ($model->load(Yii::$app->request->post())){
            $mode->stars = $model->stars;
            $mode->save();
            $model->body = "Оценка сайта \n
            Оценка: ".$model->stars;
//            $model->contact('info@engineering-ra.ru');
            $model->contact('info@hld.agency');
        }

        return $this->render('infrastructure',[
            'infstr' => $infstr,
            'model' => $model,
        ]);


    }
}
