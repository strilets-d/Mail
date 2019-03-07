<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='Вхід';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="box-shadow" style="width:300px; margin-top: 60px; padding-top: 25px;">
    <h1 style="text-align:center">Вхід</h1>
   <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div>{input}</div>\n<div >{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<?= $form->field($login_model,'username')->textInput(['autofocus' => 'true', 'style' => 'border-color:gray'])?>

<?= $form->field($login_model,'password')->passwordInput(['style' => 'border-color:gray'])?>
 <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Увійти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
    <?php $form = ActiveForm::end();?>
</div>
<h4 style="text-align:center; width:100%;">Ще не зареєстровані?<a href="index.php?r=site%2Fsignup" style="color:white;">Зареєструватись!</a></h4>

