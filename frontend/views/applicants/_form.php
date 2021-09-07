<?php

use frontend\models\Course as ModelsCourse;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model frontend\models\Applicants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    
    <fieldset>
        <legend>Tags</legend>
        <?= $form->field($model,'tag_ids')->widget(Select2::className(), [
            'model' => $model,
            'attribute' => 'tag_ids',
            'data' => ArrayHelper::map(ModelsCourse::find()->all(), 'course_name', 'course_name'),
            'options' => [
                'multiple' => true,
            ],
            'pluginOptions' => [
                'tags' => true,
            ],
        ]); ?>
    </fieldset>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_Attendance')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'individual' => 'Individual', 'applicant' => 'Applicant', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
