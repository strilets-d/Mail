<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$this->title = 'Личный кабинет';
?>
<title><?= Html::encode($this->title) ?></title>
<div class="widget">
<div>
<?= Html::img("@web/img/".Yii::$app->user->identity->image, ['style' => 'width: 300px; height: 300px; margin-left:10px; border-radius:50%;']) ?>
</div>
<div >
<?= '<a class="tooltip" href="http://mail/index.php?r=profile%2Fuser%2Fset-image&id='.Yii::$app->user->identity->id.'">.'.Html::img("@web/img/edit.png", ['style' => 'with:50px; height:50px; ']).'</a>'; ?> 
</div>
</div>
<br>
<div class="widget">
<div>
<h3>ПІБ: <?=Yii::$app->user->identity->pib ?></h3>
<h3>Логін: <?=Yii::$app->user->identity->username ?></h3>
</div>
<div >
<?= '<a class="tooltip" href="http://mail/index.php?r=profile%2Fuser%2Fupdate&id='.Yii::$app->user->identity->id.'">.'.Html::img("@web/img/edit.png", ['style' => 'with:50px; height:50px; ']).'</a>'; ?> 
</div>
</div>
