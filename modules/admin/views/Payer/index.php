<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типи платників';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-payer-index">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати тип платника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_payer',
            'name_payer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
