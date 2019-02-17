<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePayer */

$this->title = 'Create Type Payer';
$this->params['breadcrumbs'][] = ['label' => 'Type Payers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-payer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
