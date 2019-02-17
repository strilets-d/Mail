<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReverseDelivery */

$this->title = 'Create Reverse Delivery';
$this->params['breadcrumbs'][] = ['label' => 'Reverse Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reverse-delivery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
