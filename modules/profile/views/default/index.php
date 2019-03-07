<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$this->title = 'Особистий кабінет';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="widget">
<div class="box-shadow" style="padding:9px; margin-top:20px;">
<?= Html::img("@web/img/".Yii::$app->user->identity->image, ['style' => 'width: 300px; height: 300px; ']) ?>
</div>
<div >
<?= '<a class="tooltip" href="http://mail/index.php?r=profile%2Fuser%2Fset-image&id='.Yii::$app->user->identity->id.'">.'.Html::img("@web/img/edit.png", ['style' => 'with:50px; height:50px; ']).'</a>'; ?> 
</div>
</div>
<br>
<div class="widget" style="margin-top: 20px;">
<div class="box-shadow" style="padding:10px; text-align:left;">
<h3>ПІБ: <?=Yii::$app->user->identity->pib ?></h3>
<h3>Логін: <?=Yii::$app->user->identity->username ?></h3>
</div>
<div>
<?= '<a class="tooltip" href="http://mail/index.php?r=profile%2Fuser%2Fupdate&id='.Yii::$app->user->identity->id.'">.'.Html::img("@web/img/edit.png", ['style' => 'with:50px; height:50px; ']).'</a>'; ?> 
</div>
</div>
