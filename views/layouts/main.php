<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" >
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<text class="margin"><text class="margtop">'.Html::img('@web/img/brandicon.png', ['alt'=>Yii::$app->name]).'</text><text class="margleft">'.Yii::$app->name.'</text></text>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top navmy',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Головна', 'url' => ['/site/index']],
             Yii::$app->user->isGuest ? ('') : (
            Yii::$app->user->identity->admin() ? (
                ['label' => 'Адміністрування', 'url' => ['/admin/']]
            ) : (['encode' => false ,'label' =>  'Мій кабінет', 'url' => ['/profile/']]
            )
            ),
            Yii::$app->user->isGuest ? (
                ['label' => 'Увійти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')

                . Html::submitButton(
                    'Вийти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-primary marg']
                )
                . Html::endForm()
                . '</li>'
        )
           
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
