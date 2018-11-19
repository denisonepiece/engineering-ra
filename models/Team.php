<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $fio
 * @property string $position
 * @property string $tel
 * @property string $mail
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'position', 'tel', 'mail'], 'required'],
            [['fio', 'position', 'tel', 'mail', 'img'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Ф.И.О',
            'position' => 'Должность',
            'tel' => 'Телефон',
            'mail' => 'Mail',
        ];
    }
}
