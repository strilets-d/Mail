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
    <div class="box-shadow" style=" font-style: oblique; text-align: left; padding:15px; margin-top:0;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="index.php?r=mail%2Fsearch"><?= Html::img('@web/img/search.png') ?>
                        <text style="margin-left:15px;">Відслідкувати посилку</text>
                    </a>
                </li>
                <li>
                    <a href="index.php?r=mail%2Ftime"><?= Html::img('@web/img/calc.png') ?>
                        <text style="margin-left:15px;">Час доставки</text>
                    </a>
                </li>
                <li>
                    <a href="#"><?= Html::img('@web/img/put.png') ?>
                        <text style="margin-left:15px;">Вартість доставки</text>
                    </a>
                </li>
                <li>
                    <a href="#"><?= Html::img('@web/img/bank.png') ?>
                        <text style="margin-left: 15px;">Найближчі відділення</text>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-shadow" style=" background-size: contain; margin-left:10px; width:100%; padding: 5px;">
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
                                <?= Html::img('@web/img/index.jpg', ['style' => 'width:100%; height:400px; margin:0;']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-review">
                            <div class="author-id">
                                <?= Html::img('@web/img/index2.png', ['style' => 'width:100%; height:400px; margin:0;']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-review">
                            <div class="author-id">
                                <?= Html::img('@web/img/index3.jpg', ['style' => 'width:100%; height:400px; margin:0;']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </aside>
    </div>
</div>
<div class="blocks box-shadow" style="padding:50px; margin-top:50px;">
    <h3>Тут може бути ваша реклама!<a href="https://www.instagram.com/strilets.d/">Вам сюди!</a></h3>
</div>
<h2>Відгуки про нас:</h2>
<?php foreach ($reviews as $review): ?>
    <div class="box-shadow" style="padding:10px; margin-top:20px; text-align:left; ">
        <text style="display:inline-block;"><?= Html::img("@web/img/{$review->getUser()->image}", ['style' => 'width: 40px; height: 40px; margin-left:10px; border-radius:50%;']) ?>
            <b><?= Html::encode("{$review->getUser()->username}"); ?></b>
            <text class="data"> <?= Html::encode("{$review->date_review}"); ?></text>
        </text>
        <br>
        <text class="text"><?= Html::encode("{$review->text_review}"); ?></text>
        <br>
    </div>
<?php endforeach; ?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
<?= (Yii::$app->user->isGuest) ? '' : '<div class="box-shadow" style="width:500px; margin:0; padding:30px; padding-top:10px; padding-bottom: 10px;">' ?>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>
<?= (Yii::$app->user->isGuest) ? '' : $form->field($review_model, 'text')->textInput(['style' => 'border-color:#337ab7; padding:3px;']) ?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= (Yii::$app->user->isGuest) ? '' : Html::submitButton('Залишити відгук', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
</div>
<?php $form = ActiveForm::end(); ?>

<section class="box-shadow">
    <div style="width: 100%; display:inline-flex;height:300px; ">
        <div style="width:50%; text-align:left; margin:auto; padding:auto;">
            <h2>Чому саме ми?</h2>
            <div style="margin-top: 10px; width: 230px; margin-bottom:10px;">
                <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
            </div>
            Наш поштовий сервіс найпопулярніший в Україні. У нас 100% успішних доставок та завжди задоволені
            користувачі. Доставка в найкоротші терміни, привітливі працівники. Найбільш лояльні ціни відносно ішних
            доставок.
        </div>
        <div style="width:300px;"><?= html::img('@web/css/img/mainpict.jpeg', ['style' => 'width:300px; height:300px; border-radius:50%; ']) ?></div>
    </div>
    <div style="border-bottom: 1px solid silver; margin-top:50px; margin-bottom: 50px;"></div>
    <div style="text-align:center; width: 100%;">
        <h2 style="margin:auto;" class="main_h">Можливості</h2>
        <div style="margin-top: 10px;">
            <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
        </div>
    </div>
    <ul style="display: inline-flex; width: 100%; text-align: center; color:black; text-decoration:none; margin-top: 20px;">
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/first.jpg', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3><a href="index.php?r=mail%2Fsearch" class="link">Знайти посилку</a></h3>
            <p>Перегляд усіх даних про посилку за номером.</p>
        </li>
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/second.jpg', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3><a href="index.php?r=mail%2Ftime" class="link">Час доставки</a></h3>
            <p>Розрахунок часу та дати доставки з одного місця в інше.</p>
        </li>
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/third.jpg', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3>Ціна доставки</h3>
            <p>Розрахунок вартості доставки за вказаними критеріями.</p>
        </li>
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/fourth.png', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3>Відділення</h3>
            <p>Переглянути усі відділення.</p>
        </li>
    </ul>
    <div style="border-bottom: 1px solid silver; margin-top:50px; margin-bottom: 50px;"></div>
    <div style="text-align:center; width: 100%;">
        <h2 style="margin:auto;" class="main_h">Наші досягнення</h2>
        <div style="margin-top: 10px;">
            <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
        </div>
    </div>
    <div style="display: inline-flex; border-radius:25px; width:100%; margin-top:20px;">
        <div style="width:33%;">
            <div class="fas fa-users fa-7x"></div>
            <h3><?= \app\models\User::getCount() ?></h3>
            <h4>Кількість користувачів</h4>
        </div>
        <div style="width:33%;">
            <div class="fas fa-box fa-7x"></div>
            <h3><?= \app\models\Orders::getCount() ?></h3>
            <h4>Кількість відправлених посилок</h4>
        </div>
        <div style="width:33%;">
            <div class="fas fa-building fa-7x"></div>
            <h3><?= \app\models\Departments::getCount() ?></h3>
            <h4>Кількість відділень</h4>
        </div>
    </div>
</section>
