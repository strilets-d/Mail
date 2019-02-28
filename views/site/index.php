<?php
use yii\helpers\Html;
use yii\bootstrap;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
$this->title = 'Пошта';
?>
<title><?= Html::encode($this->title) ?></title>
<div style="display: inline-flex; width: 100%; height:400px; margin-top:10px;">
<div  style=" font-style: oblique;">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li>
                <a href="index.php?r=mail%2Fsearch"><?= Html::img('@web/img/search.png')?><text style="margin-left:15px;">Відслідкувати посилку</text></a>
            </li>
            <li>
                <a href="index.php?r=mail%2Ftime"><?= Html::img('@web/img/calc.png')?><text style="margin-left:15px;">Час доставки</text></a>
            </li>
            <li>
                <a href="#"><?= Html::img('@web/img/put.png')?><text style="margin-left:15px;">Вартість доставки</text></a>
            </li>
            <li>
                <a href="#"><?= Html::img('@web/img/bank.png')?><text style="margin-left: 15px;">Найближчі відділення</text></a>
            </li>
        </ul>
    </div>
</div>
<div style="height: 400px; background-size: contain; margin-left:10px; width:100%;">
                <aside class="footer-widget">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators" style="color:black;">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="author-id">
                                        <?= Html::img('@web/img/index.jpg', ['style' => 'width:100%; height:400px; border-radius:10px;']);?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="author-id">
                                        <?= Html::img('@web/img/index2.png', ['style' => 'width:100%; height:400px; border-radius:10px;']);?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="author-id">
                                        <?= Html::img('@web/img/index3.jpg', ['style' => 'width:100%; height:400px; border-radius:10px;']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
</div>
<div class="blocks">
<h3>Тут може бути ваша реклама!<a href="https://www.instagram.com/strilets.d/?hl=ru">Вам сюди!</a></h3>
</div>
<h2>Відгуки про нас:</h2>
<?php foreach ($reviews as $review): ?>
	<div class="block">
	<text style="display:inline-block;"><?= Html::img("@web/img/{$review->getUser()->image}", ['style' => 'width: 40px; height: 40px; margin-left:10px; border-radius:50%;']) ?>  <b><?= Html::encode("{$review->getUser()->username}");?></b>  <text class="data"> <?= Html::encode("{$review->date_review}");?></text></text><br>
        <text class="text"><?= Html::encode("{$review->text_review}");?></text><br>
    </div>
<?php endforeach; ?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
     <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
<?= (Yii::$app->user->isGuest) ? '' :  $form->field($review_model,'text')->textInput() ?>
  <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
<?= (Yii::$app->user->isGuest) ? '' :  Html::submitButton('Залишити відгук', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
</div>
</div> 
<?php $form = ActiveForm::end();?>
<!--
Для того чтобы вывести ДРУГИЕ поля из таблицы пользователя, обращайтесь через identity
Например, у нас в таблице есть еще поле Name, то здесь пишем так Yii::$app->user->identity->name
-->