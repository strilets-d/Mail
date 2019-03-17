<?php

use yii\helpers\Html;
use yii\bootstrap;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

$this->title = 'Пошта';
?>
<title><?= Html::encode($this->title) ?></title>
<div style="text-align:center; width: 100%; margin-top: 40px; color:white;">
    <div class="fab fa-instagram fa-3x" style="margin-bottom: 10px;"></div>
    <h2 style="margin:auto; color:white">Made by <a href="https://www.instagram.com/strilets.d/" class="inst">strilets.d</a></h2>
    <div style="margin-top: 10px;">
        <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
    </div>
</div>
<section class="box-shadow" style="margin-top: 50px;">
    <div style="width: 100%; display:inline-flex;height:300px; ">
        <div style="width:50%; text-align:left; margin:auto; padding:auto;">
            <h2>Чому саме ми?</h2>
            <div style="margin-top: 10px; width: 230px; margin-bottom:10px;">
                <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
            </div>
            Наш поштовий сервіс найпопулярніший в Україні. У нас 100% успішних доставок та завжди задоволені
            користувачі. Доставка в найкоротші терміни, привітливі працівники та найбільш лояльні ціни відносно ішних
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
            <h3><a href="<?= Url::toRoute(['/mail/search']) ?>" class="link">Знайти посилку</a></h3>
            <p>Перегляд усіх даних про посилку за номером.</p>
        </li>
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/second.jpg', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3><a href="<?= Url::toRoute(['/mail/time']) ?>" class="link">Час доставки</a></h3>
            <p>Розрахунок часу та дати доставки з одного місця в інше.</p>
        </li>
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/third.jpg', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3><a href="<?= Url::toRoute(['/mail/price']) ?>" class="link">Ціна доставки</a></h3>
            <p>Розрахунок вартості доставки за вказаними критеріями.</p>
        </li>
        <li style="width: 25%;">
            <?= Html::img('@web/css/img/fourth.png', ['style' => 'border-radius:50%; width:200px; height:200px; overflow:hidden;']) ?>
            <h3><a href="<?= Url::toRoute(['/mail/department']) ?>" class="link">Відділення</a></h3>
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
    <div style="display: inline-flex;  width:90%; margin-left: 10% ; margin-top: 30px; ">
        <div style="width:30%;">
            <div class="fas fa-users fa-7x hov" style="padding:10px;"></div>
            <h3><?= \app\models\User::getCount() ?></h3>
            <h4>Кількість користувачів</h4>
        </div>
        <div style="width:30%;">
            <div class="fas fa-box fa-7x hov" style="padding:10px;"></div>
            <h3><?= \app\models\Orders::getCount() ?></h3>
            <h4>Кількість відправлених посилок</h4>
        </div>
        <div style="width:30%;">
            <div class="fas fa-building fa-7x hov" style="padding:10px;"></div>
            <h3><?= \app\models\Departments::getCount() ?></h3>
            <h4>Кількість відділень</h4>
        </div>
    </div>
    <a href="<?= Url::toRoute(['/site/reviews']) ?>" class="learn">Переглянути відгуки</a>
    <?= (Yii::$app->user->isGuest) ? '' : '
    <div style="border-bottom: 1px solid silver; margin-top:50px; margin-bottom: 50px;"></div>
    <div style="text-align:center; width: 100%;">
        <h2 style="margin:auto;" class="main_h">Ваші враження</h2>
        <div style="margin-top: 10px;">
            <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
        </div>
    </div>' ?>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <div style="margin-top:20px;">
        <?= (Yii::$app->user->isGuest) ? '' : $form->field($review_model, 'text')->textInput(['style' => 'border-color:#337ab7; padding:3px; height: 100px; width:80%; margin:auto;']) ?>
    </div>
    <?= (Yii::$app->user->isGuest) ? '' : Html::submitButton('Залишити відгук', ['class' => 'buttonmain', 'name' => 'login-button']) ?>
    <?php $form = ActiveForm::end(); ?>
</section>
