<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Status */

$this->title = 'Оновлення статусу №: ' . $model->id_status;
$this->params['breadcrumbs'][] = ['label' => 'Статуси', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_status, 'url' => ['view', 'id' => $model->id_status]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-update">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
