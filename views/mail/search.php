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
<div class="box-shadow" style="width: 350px; margin-top: 100px;">
<?php $form = ActiveForm::begin([
    'id' => 'search-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div >{input}</div>\n<div>{error}</div>",
        'labelOptions' => ['class' => 'control-label', 'style' => 'margin-bottom: 20px;'],
    ],
]); ?>

<?= $form->field($model,'num_premise')->textInput(['autofocus'=>true]) ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Знайти', ['class' => 'btn btn-primary', 'name' => 'search-button']) ?>
        </div>
    </div>
<?php
ActiveForm::end();
?>
</div>
