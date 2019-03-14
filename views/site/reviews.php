<?php

use yii\helpers\Html;
use yii\bootstrap;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

$this->title = 'Відгуки';
?>
<title><?= Html::encode($this->title)?></title>
<div class="box-shadow" style="margin-top: 30px;">
    <div style="text-align:center; width: 100%;">
        <h2 style="margin:auto;" class="main_h ">Відгуки про нас</h2>
        <div style="margin-top: 10px;">
            <div style="border-bottom: 2px solid #e37682; width: 50px; margin:auto;"></div>
        </div>
    </div>
<?php foreach ($reviews as $review): ?>
    <div style="padding:10px; margin-top:20px; display:inline-flex; width: 100%;">
        <div style="width: 25%;"><?= Html::img("@web/img/{$review->getUser()->image}", ['style' => 'width: 200px; height: 200px; margin-left:10px; border-radius:50%;']) ?></div>
           <div style="width:75%; text-align: left;"><text class="review"><?= Html::encode("{$review->getUser()->pib}"); ?>(<?= Html::encode("{$review->getUser()->username}"); ?>)</text><text style="margin:auto; float:right;"> <?= Html::encode("{$review->date_review}"); ?></text><br>
        <div style=" height: 150px; margin:20px;">
        <?= Html::encode("{$review->text_review}"); ?>
        </div>
           </div>
    </div>
    <div style="border-bottom: 1px solid silver; margin-top:20px; margin-bottom: 20px;"></div>
<?php endforeach; ?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
