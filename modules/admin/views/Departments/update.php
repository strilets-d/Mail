<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'Оновлення відділення №: ' . $model->id_department;
$this->params['breadcrumbs'][] = ['label' => 'Відділення', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_department, 'url' => ['view', 'id' => $model->id_department]];
$this->params['breadcrumbs'][] = 'Оновлення';
?>
<div class="departments-update">
    <title><?= Html::encode($this->title) ?></title>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
