<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $department_id
 * @property int $branches_branches_id
 * @property string $department_name
 * @property int $company_commpany_id
 * @property string $department_created_at
 * @property string $department_status
 *
 * @property Branches $branchesBranches
 * @property Companies $companyCommpany
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'branches_branches_id', 'department_name', 'company_commpany_id', 'department_created_at', 'department_status'], 'required'],
            [['department_id', 'branches_branches_id', 'company_commpany_id'], 'integer'],
            [['department_created_at'], 'safe'],
            [['department_status'], 'string'],
            [['department_name'], 'string', 'max' => 100],
            [['branches_branches_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branches::className(), 'targetAttribute' => ['branches_branches_id' => 'branch_id']],
            [['company_commpany_id'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['company_commpany_id' => 'company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'branches_branches_id' => 'Branches Branches ID',
            'department_name' => 'Department Name',
            'company_commpany_id' => 'Company Commpany ID',
            'department_created_at' => 'Department Created At',
            'department_status' => 'Department Status',
        ];
    }

    /**
     * Gets query for [[BranchesBranches]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBranchesBranches()
    {
        return $this->hasOne(Branches::className(), ['branch_id' => 'branches_branches_id']);
    }

    /**
     * Gets query for [[CompanyCommpany]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyCommpany()
    {
        return $this->hasOne(Companies::className(), ['company_id' => 'company_commpany_id']);
    }
}
