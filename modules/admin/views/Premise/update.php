<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePremise */

$this->title = 'Update Type Premise: ' . $model->id_type;
$this->params['breadcrumbs'][] = ['label' => 'Type Premises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_type, 'url' => ['view', 'id' => $model->id_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-premise-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
