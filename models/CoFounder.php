<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "co_founder".
 *
 * @property int $id
 * @property string $about
 * @property string $address
 * @property string $telephone
 * @property string $e-mail
 * @property string $site
 */
class CoFounder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'co_founder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about', 'address', 'telephone', 'email', 'site'], 'required'],
            [['about'], 'string'],
            [['address', 'telephone', 'email', 'site'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about' => 'Описание',
            'address' => 'Адрес',
            'telephone' => 'Телефон, факс',
            'email' => 'Почта',
            'site' => 'Сайт',
        ];
    }
}
