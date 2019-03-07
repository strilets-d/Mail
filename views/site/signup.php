<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='Реєстрація';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="box-shadow" style="width:350px;margin-top:30px; padding-top: 30px;">
<h1>Реєстрація</h1>
   <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div >{input}</div>\n<div >{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<?= $form->field($model,'pib')->textInput(['autofocus' => 'true', 'style' => 'border-color:gray']) ?>
<?= $form->field($model,'username')->textInput(['style' => 'border-color:gray']) ?>

<?= $form->field($model,'password')->passwordInput([ 'style' => 'border-color:gray'])?>

  <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зареєструватись', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<?php
    ActiveForm::end();
?>
</div>
<h4 style="width: 100%; text-align: center;">Вже зареєстровані?<a href="index.php?r=site%2Flogin" style="color:white">Увійти!</a></h4>
