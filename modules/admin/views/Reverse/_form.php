<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReverseDelivery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reverse-delivery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_reverse_del')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
