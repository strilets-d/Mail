<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Packaging */

$this->title = 'Оновлення упаковки №: ' . $model->id_packaging;
$this->params['breadcrumbs'][] = ['label' => 'Упаковки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_packaging, 'url' => ['view', 'id' => $model->id_packaging]];
$this->params['breadcrumbs'][] = 'Оновлення';
?>
<div class="packaging-update">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
