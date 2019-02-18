<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 18.02.2019
 * Time: 0:00
 */
$this->title='Калькулятор времени доставки';

use yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
?>
<title><? Html::encode($this->title) ?></title>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]);
$items = [
    '0' => 'Хмельницкий',
    '1' => 'Винница',
    '2'=>'Киев'
];
$params = [
    'prompt' => 'Выберите город'
];
echo $form->field($model, 'city_one')->dropDownList($items,$params);
echo $form->field($model, 'city_two')->dropDownList($items,$params);
?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
<?= Html::submitButton('Разсчитать', ['class' => 'btn btn-primary', 'name' => 'calc-button']) ?>
    </div>
</div>
<h3>Время доставки(дней): 3 </h3>
<?php $form = ActiveForm::end();?>
