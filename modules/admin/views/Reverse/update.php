<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReverseDelivery */

$this->title = 'Update Reverse Delivery: ' . $model->id_reverse_del;
$this->params['breadcrumbs'][] = ['label' => 'Reverse Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reverse_del, 'url' => ['view', 'id' => $model->id_reverse_del]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reverse-delivery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
