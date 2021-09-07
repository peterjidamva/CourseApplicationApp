<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Applicants */

$this->title = $model->applicant_id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="applicants-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'applicant_id' => $model->applicant_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'applicant_id' => $model->applicant_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'applicant_id',
            'first_name',
            'last_name',
            'phone',
            'email:email',
            'number_of_Attendance',
            'status',
        ],
    ]) ?>

</div>
