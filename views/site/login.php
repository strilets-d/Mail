<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='Вход';
?>
<h1>Вход</h1>
<title><?= Html::encode($this->title) ?></title>
<?php
$this->params['breadcrumbs'][] = $this->title;
?>
   <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<?= $form->field($login_model,'username')->textInput(['autofocus' => 'true'])?>

<?= $form->field($login_model,'password')->passwordInput()?>
 <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
<h4>Ещё не зарегистрированы?<a href="index.php?r=site%2Fsignup">Зарегистрироваться!</a></h4>
<?php $form = ActiveForm::end();?>
