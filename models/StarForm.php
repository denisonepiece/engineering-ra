<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class StarForm extends Model
{
    public $stars;
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['stars'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'stars' => 'Оценка',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom('bikrain@yandex.ru')
                ->setSubject('Оценка сайта')
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}