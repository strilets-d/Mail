<?php

/* @var $this \yii\web\modules\profile\views */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\app;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<text class="margin"><text class="margtop">'.Html::img('@web/img/brandicon.png', ['alt'=>Yii::$app->name]).'</text><text class="margleft">'.Yii::$app->name.'</text></text>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Заказы', 'url' => ['/admin/orders/index']],
            ['label' => 'Отзывы', 'url' => ['/admin/review/index']],
            ['label' => 'Упаковки', 'url' => ['/admin/packaging/index']],
            ['label' => 'Отделения', 'url' => ['/admin/departments/index']],
            ['label' => 'Обратная доставка', 'url' => ['/admin/reverse/index']],
            ['label' => 'Тип плательщика', 'url' => ['/admin/payer/index']],
            ['label' => 'Тип посылки', 'url' => ['/admin/premise/index']],
            ['label' => 'Статус', 'url' => ['/admin/status/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')

                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
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

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
