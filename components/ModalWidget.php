<?php
/**
 * Created by PhpStorm.
 * User: Absurd
 * Date: 26.11.2018
 * Time: 13:53
 */

namespace app\components;

use app\models\ServiceForm;
use app\models\Services;
use Yii;
use yii\base\Widget;
use app\models\CounselingForm;

class ModalWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $model = new CounselingForm();
        $service = new ServiceForm();
        if ($model->load(Yii::$app->request->post())){
            $model->body = "Получение консультации \n
            ФИО: ".$model->fio."\n
            Контактные данные: ".$model->contact."\n
            Данные организации: ".$model->data."\n
            Тема обращения: ".$model->subject."\n
            Текст обращения: ".$model->text_subject;
            $model->contact();
        }
        if ($service->load(Yii::$app->request->post())){
            $service->body = "Заявка на услугу \n
            ФИО: ".$service->fio."\n
            Контактные данные: ".$service->contact."\n
            Данные организации: ".$service->data."\n
            Что требуется?: ".$service->about;
            $service->contact();
        }


        return $this->render('modal', [
            'model' => $model,
            'service' => $service,
        ]);
    }
}