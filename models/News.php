<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $date
 * @property string $date_ivent
 * @property string $event
 * @property string $point
 * @property string $format
 * @property string $contact
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'event', 'point', 'format', 'contact'], 'string'],
            [['date', 'date_ivent', 'point', 'format', 'contact'], 'safe'],
            [['event'], 'required'],
            [['title'], 'string', 'max' => 255],
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
            'date' => 'Date',
            'date_ivent' => 'Дата события',
            'event' => 'Название события',
            'point' => 'Место проведения',
            'format' => 'Формат',
            'contact' => 'Контакты',
        ];
    }
}
