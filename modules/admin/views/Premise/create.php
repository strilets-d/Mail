<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePremise */

$this->title = 'Додавання типу посилки';
$this->params['breadcrumbs'][] = ['label' => 'Типи посилок', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-premise-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
