<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Packaging */

$this->title = 'Update Packaging: ' . $model->id_packaging;
$this->params['breadcrumbs'][] = ['label' => 'Packagings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_packaging, 'url' => ['view', 'id' => $model->id_packaging]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="packaging-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
