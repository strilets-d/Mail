<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Packaging */

$this->title = 'Додавання упаковки';
$this->params['breadcrumbs'][] = ['label' => 'Упаковки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packaging-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
