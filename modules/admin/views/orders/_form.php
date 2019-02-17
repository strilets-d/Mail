<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_premise')->textInput() ?>

    <?= $form->field($model, 'id_department')->textInput() ?>

    <?= $form->field($model, 'phone_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pib_sender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pib_recipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_premise')->textInput() ?>

    <?= $form->field($model, 'length_premise')->textInput() ?>

    <?= $form->field($model, 'width_premise')->textInput() ?>

    <?= $form->field($model, 'height_premise')->textInput() ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'id_dep_rec')->textInput() ?>

    <?= $form->field($model, 'price_premise')->textInput() ?>

    <?= $form->field($model, 'price_delivery')->textInput() ?>

    <?= $form->field($model, 'type_payer')->textInput() ?>

    <?= $form->field($model, 'reverse_delivery')->textInput() ?>

    <?= $form->field($model, 'packaging')->textInput() ?>

    <?= $form->field($model, 'courier')->textInput() ?>

    <?= $form->field($model, 'address_delivery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
