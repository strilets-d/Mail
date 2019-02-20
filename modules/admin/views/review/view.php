<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Review */

$this->title = $model->id_review;
$this->params['breadcrumbs'][] = ['label' => 'Відгуки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="review-view">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id_review], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id_review], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви дійсно хочете видалити цей відгук?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_review',
            'id_user',
            'text_review',
            'date_review',
        ],
    ]) ?>

</div>
