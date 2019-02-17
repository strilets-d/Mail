<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePayer */

$this->title = 'Update Type Payer: ' . $model->id_payer;
$this->params['breadcrumbs'][] = ['label' => 'Type Payers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_payer, 'url' => ['view', 'id' => $model->id_payer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-payer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
