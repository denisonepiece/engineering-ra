<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $deadline
 * @property string $status
 * @property string $support
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'status', 'support', 'material'], 'string'],
            [['deadline', 'img'], 'safe'],
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
            'img' => 'Превью',
            'deadline' => 'Дата окончания приема заявок',
            'status' => 'Статус',
            'material' => 'Материалы и документация',
            'support' => 'Цена',
        ];
    }
}
