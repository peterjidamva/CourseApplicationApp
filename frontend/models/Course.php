<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $course_id
 * @property string $course_name
 * @property string $start_date
 * @property string $end_date
 * @property string $course_campus
 *
 * @property AppliedCourse[] $appliedCourses
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

    public static function getTagByName($name)
    {
        $tag = Course::find()->where(['name' => $name])->one();
        if (!$tag) {
            $tag = new Course();
            $tag->name = $name;
            $tag->save(false);
        }
        return $tag;
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

    /**
     * Gets query for [[AppliedCourses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppliedCourses()
    {
        return $this->hasMany(AppliedCourse::className(), ['short_course_id' => 'course_id']);
    }
}
