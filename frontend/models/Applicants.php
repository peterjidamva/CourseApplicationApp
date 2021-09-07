<?php

namespace frontend\models;
use Yii;

/**
 * This is the model class for table "applicants".
 *
 * @property int $applicant_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property int $number_of_Attendance
 * @property string $status
 *
 * @property AppliedCourse[] $appliedCourses
 */
class Applicants extends \yii\db\ActiveRecord
{



    public $tag_ids;
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
            [['first_name', 'last_name', 'phone', 'email', 'number_of_Attendance', 'status'], 'required'],
            [['number_of_Attendance'], 'integer'],
            [['status'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 50],
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
            'email' => 'Email',
            'number_of_Attendance' => 'Number Of  Attendance',
            'status' => 'Status',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        $tags = [];
        foreach ($this->course_id as $tag_name) {
            $tag = Course::getTagByName($tag_name);
            if ($tag) {
                $tags[] = $tag;
            }
        }
        $this->linkAll('tags', $tags);
        parent::afterSave($insert, $changedAttributes);
    }

    /**
     * Gets query for [[AppliedCourses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppliedCourses()
    {
        return $this->hasMany(AppliedCourse::className(), ['applicant_id' => 'applicant_id']);
    }
}
