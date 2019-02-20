<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 18.02.2019
 * Time: 0:00
 */
$this->title='Калькулятор часу доставки';

use yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
?>
<title><?= Html::encode($this->title) ?></title>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]);
$items = [
    '0' => 'Хмельницький',
    '1' => 'Вінниця',
    '2'=>'Київ'
];
$params = [
    'prompt' => 'Оберіть місто'
];
echo $form->field($model, 'city_one')->dropDownList($items,$params);
echo $form->field($model, 'city_two')->dropDownList($items,$params);
?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
<?= Html::submitButton('Порахувати', ['class' => 'btn btn-primary', 'name' => 'calc-button']) ?>
    </div>
</div>
<?php $form = ActiveForm::end();?>
