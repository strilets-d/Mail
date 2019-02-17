<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Packaging */

$this->title = 'Create Packaging';
$this->params['breadcrumbs'][] = ['label' => 'Packagings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packaging-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
