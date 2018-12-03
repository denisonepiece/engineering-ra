<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "star".
 *
 * @property int $id
 * @property int $stars
 */
class Star extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'star';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stars'], 'required'],
            [['stars'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stars' => 'Stars',
        ];
    }
}
