<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReverseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Зворотні доставки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reverse-delivery-index">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати зворотню доставку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_reverse_del',
            'type_reverse_del',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
