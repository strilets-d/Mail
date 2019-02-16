<?php
use yii\helpers\Html;
use yii\bootstrap;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
$this->title = 'Почта';
?>
<title><?= Html::encode($this->title) ?></title>
<div style="display: inline-flex;">
<div class="sidebar" style="width:250px; font-style: oblique;">
<?php
NavBar::begin();
echo Nav::widget([
'options' => ['class' => 'sidebar navbar-default margs'],
'items' => [
            ['encode' => false ,'label' =>  Html::img('@web/img/search.png', ['alt'=>'none image', 'style' => ''])." Отследить посылку", 'url' => ['#'], 'linkOptions' => ['style' => 'color: #000;']],
            ['encode' => false ,'label' =>  Html::img('@web/img/calc.png', ['alt'=>'none image', 'style' => ''])." Время доставки", 'url' => ['#'], 'linkOptions' => ['style' => 'color: #000;']],

            ['encode' => false ,'label' =>  Html::img('@web/img/put.png', ['alt'=>'none image', 'style' => ''])." Стоимость доставки", 'url' => ['#'], 'linkOptions' => ['style' => 'color: #000;']],

            ['encode' => false ,'label' =>  Html::img('@web/img/bank.png', ['alt'=>'none image', 'style' => ''])." Ближайшие отделения", 'url' => ['#'], 'linkOptions' => ['style' => 'color: #000;']],
        ],
    ]);
NavBar::end(); 
?>
</div>
<diV style="width: auto;">
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
                                        <?= Html::img('@web/img/index.jpg', ['style' => 'width: 889px; height: 500px; border-radius:15px;']);?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="author-id">
                                        <?= Html::img('@web/img/index2.png', ['style' => 'width: 889px; height: 500px; border-radius:15px;']);?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="author-id">
                                        <?= Html::img('@web/img/index3.jpg', ['style' => 'width: 889px; height: 500px; border-radius:15px;']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
</diV>
<div class="blocks">
<h3>Здесь может быть ваша реклама!<a href="https://www.instagram.com/strilets.d/?hl=ru">Вам сюда!</a></h3>
</div>
<h2>Отзывы о нас:</h2>
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
<?= (Yii::$app->user->isGuest) ? '' :  Html::submitButton('Оставить отзыв', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
</div>
</div> 
<?php $form = ActiveForm::end();?>
<!--
Для того чтобы вывести ДРУГИЕ поля из таблицы пользователя, обращайтесь через identity
Например, у нас в таблице есть еще поле Name, то здесь пишем так Yii::$app->user->identity->name
-->