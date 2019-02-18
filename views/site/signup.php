<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='Реєстрація';
?>
<title><?= Html::encode($this->title) ?></title>
<h1>Реєстрація</h1>
   <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<?= $form->field($model,'pib')->textInput(['autofocus'=>true]) ?>
<?= $form->field($model,'username')->textInput() ?>

<?= $form->field($model,'password')->passwordInput()?>

  <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зареєструватись', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
<h4>Вже зареєстровані?<a href="index.php?r=site%2Flogin">Увійти!</a></h4>
<?php
    ActiveForm::end();
?>
