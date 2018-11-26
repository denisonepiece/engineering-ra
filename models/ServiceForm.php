<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ServiceForm extends Model
{
    public $fio;
    public $contact;
    public $data;
    public $about;
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['fio', 'contact', 'data', 'about'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'fio' => 'ФИО',
            'contact' => 'Как с вами связаться?',
            'data' => 'Данные организации',
            'about' => 'Что требуется?',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('info@hld.agency')
                ->setFrom('bikrain@yandex.ru')
                ->setSubject('Заявка на услугу')
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
