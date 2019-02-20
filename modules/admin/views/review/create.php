<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Review */

$this->title = 'Додавання відгуку';
$this->params['breadcrumbs'][] = ['label' => 'Відгуки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
