<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Status */

$this->title = $model->id_status;
$this->params['breadcrumbs'][] = ['label' => 'Статуси', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="status-view">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id_status], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id_status], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви дійсно хочете видалити цей статус?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_status',
            'name_status',
            'image_status',
        ],
    ]) ?>

</div>
