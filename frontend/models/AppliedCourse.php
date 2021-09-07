<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "applied_course".
 *
 * @property int $short_course_id
 * @property int $applicant_id
 *
 * @property Applicants $applicant
 * @property Course $shortCourse
 */
class AppliedCourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applied_course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['short_course_id', 'applicant_id'], 'required'],
            [['short_course_id', 'applicant_id'], 'integer'],
            [['applicant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Applicants::className(), 'targetAttribute' => ['applicant_id' => 'applicant_id']],
            [['short_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['short_course_id' => 'course_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'short_course_id' => 'Short Course ID',
            'applicant_id' => 'Applicant ID',
        ];
    }

    /**
     * Gets query for [[Applicant]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant()
    {
        return $this->hasOne(Applicants::className(), ['applicant_id' => 'applicant_id']);
    }

    /**
     * Gets query for [[ShortCourse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortCourse()
    {
        return $this->hasOne(Course::className(), ['course_id' => 'short_course_id']);
    }
}
