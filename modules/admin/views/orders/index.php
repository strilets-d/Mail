<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_order',
            'num_premise',
            'id_department',
            'phone_user',
            'pib_sender',
            //'pib_recipient',
            //'weight_premise',
            //'length_premise',
            //'width_premise',
            //'height_premise',
            //'id_type',
            //'id_dep_rec',
            //'price_premise',
            //'price_delivery',
            //'type_payer',
            //'reverse_delivery',
            //'packaging',
            //'courier',
            //'address_delivery',
            //'status',
            //'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
