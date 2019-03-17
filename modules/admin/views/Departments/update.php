<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'Update Departments: ' . $model->id_department;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_department, 'url' => ['view', 'id' => $model->id_department]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
