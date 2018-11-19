<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $titleabout
 * @property string $contantabout
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'titleabout', 'contantabout'], 'required'],
            [['title', 'content', 'titleabout', 'contantabout'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Контент',
            'titleabout' => 'Заголовок пояснения',
            'contantabout' => 'Пояснение',
        ];
    }
}
