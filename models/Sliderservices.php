<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sliderservices".
 *
 * @property int $id
 * @property string $img
 * @property int $id_services
 *
 * @property Services $services
 */
class Sliderservices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sliderservices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'id_services'], 'required'],
            [['img'], 'string'],
            [['id_services'], 'integer'],
            [['id_services'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['id_services' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'id_services' => 'Id Services',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['id' => 'id_services']);
    }
}
