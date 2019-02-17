<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TypePremise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-premise-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
