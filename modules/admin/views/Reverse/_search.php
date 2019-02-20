<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReverseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reverse-delivery-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_reverse_del') ?>

    <?= $form->field($model, 'type_reverse_del') ?>

    <div class="form-group">
        <?= Html::submitButton('Пошук', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Оновити', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
