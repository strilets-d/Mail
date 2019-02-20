<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = 'Оновлення запису №: ' . $model->id_order;
$this->params['breadcrumbs'][] = ['label' => 'Посилки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_order, 'url' => ['view', 'id' => $model->id_order]];
$this->params['breadcrumbs'][] = 'Оновлення';
?>
<div class="orders-update">
    <title><?= Html::encode($this->title)?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
