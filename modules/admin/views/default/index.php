<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$this->title = 'Адміністрування';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="admin-default-index">
    <h2><?= Yii::$app->user->identity->username ?> вітаю в кабінеті адміністратора!</h2>
</div>
