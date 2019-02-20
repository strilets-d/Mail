<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Status */

$this->title = 'Додавання статусу';
$this->params['breadcrumbs'][] = ['label' => 'Статуси', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
