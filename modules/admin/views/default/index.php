<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$this->title = 'Администрирование';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="admin-default-index">
    <h2>Приветствую  в кабинете администратора, <?= Yii::$app->user->identity->username ?>!</h2>
</div>
