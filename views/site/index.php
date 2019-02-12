<?php
use yii\helpers\Html;
use yii\bootstrap;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
$this->title = 'Почта';
?>
<title><?= Html::encode($this->title) ?></title>
<h2>Отзывы о нас:</h2>
	
<?php foreach ($reviews as $review): ?>
	<div class="block">
	<text style="display:inline-block;"><?= Html::img("@web/img/{$review->getUser()->image}", ['style' => 'width: 40px; height: 40px; margin-left:10px']) ?>  <b><?= Html::encode("{$review->getUser()->username}");?></b>  <text class="data"> <?= Html::encode("{$review->date_review}");?></text></text><br>
        <text class="text"><?= Html::encode("{$review->text_review}");?></text><br>
    </div>
<?php endforeach; ?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
<?php $form = ActiveForm::begin(); ?>
<?= (Yii::$app->user->isGuest) ? '' :  $form->field($review_model,'text')->textInput() ?>
<?= (Yii::$app->user->isGuest) ? '' : Html::submitButton('Оставить отзыв', ['class' => 'btn btn-primary', 'name' => 'review-button']) ?>
<?php $form = ActiveForm::end();?>
<!--
Для того чтобы вывести ДРУГИЕ поля из таблицы пользователя, обращайтесь через identity
Например, у нас в таблице есть еще поле Name, то здесь пишем так Yii::$app->user->identity->name
-->