<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$this->title = 'Особистий кабінет';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="box-shadow" style="padding:9px; margin-top:20px; width: 100%; height:470px;">
    <div style="text-align:center; width: 100%;">
        <h2 style="margin:auto;" class="main_h ">Особиста інформація</h2>
        <div style="margin-top: 10px;">
            <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
        </div>
    </div>
    <div style="display: inline-flex; margin-top: 30px; width: 100%;">
<div style="width:30%;">
<?= Html::img("@web/img/".Yii::$app->user->identity->image, ['style' => 'width: 250px; height: 250px; border-radius:50%;']) ?>
<a href="<?= Url::toRoute(['user/set-image', 'id'=>Yii::$app->user->identity->id]);?>" class="buttonmain" style="margin-top:20px;">Змінити фото</a>
</div>
<div style="width:70%; text-align: left;">
<h4>ПІБ: <?=Yii::$app->user->identity->pib ?></h4>
<h4>Логін: <?=Yii::$app->user->identity->username ?></h4>
    <a href="<?= Url::toRoute(['user/update', 'id'=>Yii::$app->user->identity->id]);?>"  class="buttonmain">Змінити дані</a>
<div>
<?= '<a class="tooltip" href="http://mail/index.php?r=profile%2Fuser%2Fupdate&id='.Yii::$app->user->identity->id.'">.'.Html::img("@web/img/edit.png", ['style' => 'with:50px; height:50px; ']).'</a>'; ?>
</div>
</div>
    </div>
</div>
