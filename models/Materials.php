<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materials".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $id_doc
 * @property int $id_section
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'id_doc', 'id_section'], 'required'],
            [['title', 'content'], 'string'],
            [['id_doc', 'id_section'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'content' => 'Контент',
            'id_doc' => 'Раздел',
            'id_section' => 'Подраздел',
        ];
    }
}
