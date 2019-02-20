<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Review */

$this->title = 'Оновлення відгуку №: ' . $model->id_review;
$this->params['breadcrumbs'][] = ['label' => 'Відгуки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_review, 'url' => ['view', 'id' => $model->id_review]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="review-update">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
