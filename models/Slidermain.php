<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slidermain".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $img
 */
class Slidermain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slidermain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'img', 'url'], 'required'],
            [['title', 'content', 'img', 'url'], 'string'],
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
            'img' => 'Изображение',
            'url' => 'Ссылка на статью',
        ];
    }
}
