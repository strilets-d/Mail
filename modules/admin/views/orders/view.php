<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = $model->id_order;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_order], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_order], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_order',
            'num_premise',
            'id_department',
            'phone_user',
            'pib_sender',
            'pib_recipient',
            'weight_premise',
            'length_premise',
            'width_premise',
            'height_premise',
            'id_type',
            'id_dep_rec',
            'price_premise',
            'price_delivery',
            'type_payer',
            'reverse_delivery',
            'packaging',
            'courier',
            'address_delivery',
            'status',
            'id_user',
        ],
    ]) ?>

</div>
