<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $course_id
 * @property string $course_name
 * @property string $start_date
 * @property string $end_date
 * @property string $course_campus
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_name', 'start_date', 'end_date', 'course_campus'], 'required'],
            [['course_campus'], 'string'],
            [['course_name', 'start_date', 'end_date'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'course_name' => 'Course Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'course_campus' => 'Course Campus',
        ];
    }
}
