<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePayer */

$this->title = 'Оновлення типу платника №: ' . $model->id_payer;
$this->params['breadcrumbs'][] = ['label' => 'Типи платників', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_payer, 'url' => ['view', 'id' => $model->id_payer]];
$this->params['breadcrumbs'][] = 'Оновлення';
?>
<div class="type-payer-update">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
