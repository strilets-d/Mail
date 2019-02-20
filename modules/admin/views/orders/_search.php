<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_order') ?>

    <?= $form->field($model, 'num_premise') ?>

    <?= $form->field($model, 'id_department') ?>

    <?= $form->field($model, 'phone_user') ?>

    <?= $form->field($model, 'pib_sender') ?>

    <?php echo $form->field($model, 'pib_recipient') ?>

    <?php  echo $form->field($model, 'weight_premise') ?>

    <?php  echo $form->field($model, 'length_premise') ?>

    <?php  echo $form->field($model, 'width_premise') ?>

    <?php  echo $form->field($model, 'height_premise') ?>

    <?php echo $form->field($model, 'id_type') ?>

    <?php  echo $form->field($model, 'id_dep_rec') ?>

    <?php  echo $form->field($model, 'price_premise') ?>

    <?php  echo $form->field($model, 'price_delivery') ?>

    <?php  echo $form->field($model, 'type_payer') ?>

    <?php  echo $form->field($model, 'reverse_delivery') ?>

    <?php  echo $form->field($model, 'packaging') ?>

    <?php  echo $form->field($model, 'courier') ?>

    <?php  echo $form->field($model, 'address_delivery') ?>

    <?php  echo $form->field($model, 'status') ?>

    <?php  echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
