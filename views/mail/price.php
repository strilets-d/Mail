<?php
use yii\bootstrap\ActiveForm;
$this->title = "Калькулятор вартості доставки";
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'num_premise')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id_department')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Departments::find()->all(), 'id_department', 'fullDepartment')
) ?>

    <?= $form->field($model, 'phone_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pib_sender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pib_recipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_premise')->textInput() ?>

    <?= $form->field($model, 'length_premise')->textInput() ?>

    <?= $form->field($model, 'width_premise')->textInput() ?>

    <?= $form->field($model, 'height_premise')->textInput() ?>

    <?= $form->field($model, 'id_type')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\TypePremise::find()->all(), 'id_type', 'name_type')
) ?>

    <?= $form->field($model, 'id_dep_rec')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Departments::find()->all(), 'id_department', 'fullDepartment')
) ?>

    <?= $form->field($model, 'price_premise')->textInput() ?>

    <?= $form->field($model, 'type_payer')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\TypePayer::find()->all(), 'id_payer', 'name_payer')
) ?>

    <?= $form->field($model, 'reverse_delivery')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\ReverseDelivery::find()->all(), 'id_reverse_del', 'type_reverse_del'),
    ['prompt' => 'Оберіть тип(не обовязково)']
) ?>

    <?= $form->field($model, 'packaging')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Packaging::find()->all(), 'id_packaging', 'type_packaging'),
    ['prompt' => 'Оберіть тип(не обовязково)']
) ?>
    <?php
    $items = [
        '0' => 'Ні',
        '1' => 'Так'
    ];
    ?>

    <?= $form->field($model, 'courier')->dropDownList(
    $items
) ?>

    <?= $form->field($model, 'address_delivery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Status::find()->all(), 'id_status', 'name_status')
) ?>
    <?= $form->field($model, 'price_delivery')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id_user')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\User::find()->where(['role' => 'user'])->all(), 'id', 'username'),
    ['prompt' => 'Обиріть користувача( не обовязково)']
) ?>
    <div class="form-group">
        <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>