<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PremiseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-premise-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_type') ?>

    <?= $form->field($model, 'name_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Пошук', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Оновити', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
