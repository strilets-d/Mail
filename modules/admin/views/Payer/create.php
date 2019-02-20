<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypePayer */

$this->title = 'Додавання типу платника';
$this->params['breadcrumbs'][] = ['label' => 'Типи платників', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-payer-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
