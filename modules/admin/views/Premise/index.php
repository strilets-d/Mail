<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PremiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типи посилок';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-premise-index">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати тип посилки', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_type',
            'name_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
