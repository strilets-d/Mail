<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReverseDelivery */

$this->title = 'Додавання зворотньої доставки';
$this->params['breadcrumbs'][] = ['label' => 'Зворотні доставки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reverse-delivery-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
