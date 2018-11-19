<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $uraddress
 * @property string $postaddress
 * @property string $timework
 * @property string $mail
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uraddress', 'postaddress', 'timework', 'mail'], 'required'],
            [['uraddress', 'postaddress', 'timework', 'mail', 'map_x', 'map_y'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uraddress' => 'Юридический адрес',
            'postaddress' => 'Почтовый адрес',
            'timework' => 'Рабочее время',
            'mail' => 'Mail',
        ];
    }
}
