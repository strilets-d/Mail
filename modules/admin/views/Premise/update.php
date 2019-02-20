<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePremise */

$this->title = 'Оновлення посилки №: ' . $model->id_type;
$this->params['breadcrumbs'][] = ['label' => 'Типи посилок', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_type, 'url' => ['view', 'id' => $model->id_type]];
$this->params['breadcrumbs'][] = 'Оновлення';
?>
<div class="type-premise-update">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
