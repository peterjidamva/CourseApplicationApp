<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applicants".
 *
 * @property int $applicant_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $courses_selected
 * @property int $number_of_Attendance
 * @property string $status
 */
class Applicants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applicants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'phone', 'courses_selected', 'number_of_Attendance', 'status'], 'required'],
            [['number_of_Attendance'], 'integer'],
            [['status'], 'string'],
            [['first_name', 'last_name', 'courses_selected'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'applicant_id' => 'Applicant ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'courses_selected' => 'Courses Selected',
            'number_of_Attendance' => 'Number Of  Attendance',
            'status' => 'Status',
        ];
    }
}
