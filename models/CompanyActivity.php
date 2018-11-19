<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_activity".
 *
 * @property int $id
 * @property int $id_company
 * @property int $id_activity
 *
 * @property FieldOfActivity $activity
 * @property Company $company
 */
class CompanyActivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_company', 'id_activity'], 'required'],
            [['id_company', 'id_activity'], 'integer'],
            [['id_activity'], 'exist', 'skipOnError' => true, 'targetClass' => FieldOfActivity::className(), 'targetAttribute' => ['id_activity' => 'id']],
            [['id_company'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['id_company' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_company' => 'Id Company',
            'id_activity' => 'Id Activity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(FieldOfActivity::className(), ['id' => 'id_activity']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'id_company']);
    }
}
