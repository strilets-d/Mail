<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = 'Додавання посилки';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-create">
    <title><?= Html::encode($this->title)?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
