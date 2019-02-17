<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePremise */

$this->title = 'Create Type Premise';
$this->params['breadcrumbs'][] = ['label' => 'Type Premises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-premise-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
