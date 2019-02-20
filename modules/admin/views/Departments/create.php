<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'Додавання відділення';
$this->params['breadcrumbs'][] = ['label' => 'Відділення', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-create">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
