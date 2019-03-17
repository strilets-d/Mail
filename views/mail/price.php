<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = "Калькулятор вартості доставки";
?>
<title><?= Html::encode($this->title) ?></title>
<?php
if($sum != NULL){
    echo ' <div class="box-shadow" style="text-align: left; margin-top:30px; padding:30px;">';
    echo '<h3>Вартість доставки складе:</h3>'.$sum.' грн.<br>';
    echo '<span style="color:red">!</span></span><span style="color:gray">Вказана сума може відрізнятись від суми розрахованої у відділенні.</span></div>';
}
?>

<div class="box-shadow" style="text-align: left; margin-top:30px; width:100%;">
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'city1')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Cities::find()->all(), 'id_city', 'name_city'),['style' => 'margin-top:5px; border-color:gray']
) ?>

    <?= $form->field($model, 'weight_premise')->textInput(['style' => 'margin-top:5px; border-color:gray;']) ?>

    <?= $form->field($model, 'length_premise')->textInput(['style' => 'margin-top:5px; border-color:gray;']) ?>

    <?= $form->field($model, 'width_premise')->textInput(['style' => 'margin-top:5px; border-color:gray;']) ?>

    <?= $form->field($model, 'height_premise')->textInput(['style' => 'margin-top:5px; border-color:gray;']) ?>

    <?= $form->field($model, 'type_premise')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\TypePremise::find()->all(), 'id_type', 'name_type'),['style' => 'margin-top:5px; border-color:gray'])?>

    <?= $form->field($model, 'city2')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Cities::find()->all(), 'id_city', 'name_city'),['style' => 'margin-top:5px; border-color:gray']
) ?>

    <?= $form->field($model, 'price_premise')->textInput(['style' => 'margin-top:5px; border-color:gray']) ?>

    <?= $form->field($model, 'type_payer')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\TypePayer::find()->all(), 'id_payer', 'name_payer'),['style' => 'margin-top:5px; border-color:gray']
) ?>

    <?= $form->field($model, 'type_reverse_delivery')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\ReverseDelivery::find()->all(), 'id_reverse_del', 'type_reverse_del'),
    ['style' => 'margin-top:5px; border-color:gray','prompt' => 'Оберіть тип(не обовязково)']
) ?>

    <?= $form->field($model, 'type_packaging')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Packaging::find()->all(), 'id_packaging', 'type_packaging'),
    ['style' => 'margin-top:5px; border-color:gray','prompt' => 'Оберіть тип(не обовязково)']
) ?>
    <?php
    $items = [
        '0' => 'Ні',
        '1' => 'Так'
    ];
    ?>
    <?= $form->field($model, 'courier')->dropDownList(
    $items,['style' => 'margin-top:5px; border-color:gray']
) ?>
    <div style="margin:auto; width:100%;text-align:center;">
        <div class="">
            <?= Html::submitButton('Порахувати', ['class' => 'buttonmain']) ?>
        </div>
    </div>
<?php $form = ActiveForm::end(); ?>
</div>
