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
<div class="box-shadow" style="width: 350px; margin-top:50px;">
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div >{input}</div>\n<div >{error}</div>",
        'labelOptions' => ['class' => 'control-label'],
    ],
]);
?>
<?= $form->field($model, 'city_one')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Cities::find()->all(), 'id_city', 'name_city'),
    ['prompt' => 'Оберіть місто']
) ?>
<?= $form->field($model, 'city_two')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Cities::find()->all(), 'id_city', 'name_city'),
        ['prompt' => 'Оберіть місто']
) ?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
<?= Html::submitButton('Порахувати', ['class' => 'btn btn-primary', 'name' => 'calc-button']) ?>
    </div>
</div>
<?php $form = ActiveForm::end();?>
</div>