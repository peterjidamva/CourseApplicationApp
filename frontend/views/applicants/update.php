<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Applicants */

$this->title = 'Update Applicants: ' . $model->applicant_id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->applicant_id, 'url' => ['view', 'applicant_id' => $model->applicant_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applicants-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
