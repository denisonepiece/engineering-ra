<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "field_of_activity".
 *
 * @property int $id
 * @property string $name
 *
 * @property CompanyActivity[] $companyActivities
 */
class FieldOfActivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'field_of_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Сфера деятельности',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyActivities()
    {
        return $this->hasMany(CompanyActivity::className(), ['id_activity' => 'id']);
    }
}
