<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 17.02.2019
 * Time: 15:26
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='Поиск';
?>
<title><?= Html::encode($this->title) ?></title>
<?php $form = ActiveForm::begin([
    'id' => 'search-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>

<?= $form->field($model,'num_premise')->textInput(['autofocus'=>true]) ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Найти', ['class' => 'btn btn-primary', 'name' => 'search-button']) ?>
        </div>
    </div>
<?php
ActiveForm::end();
?>
