<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TypePayer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-payer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_payer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
