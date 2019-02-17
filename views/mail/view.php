<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 17.02.2019
 * Time: 15:26
 */

use app\models\Departments;
use app\models\Packaging;
use app\models\ReverseDelivery;
use app\models\Status;
use app\models\TypePremise;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title='Информация';
?>
    <title><?= Html::encode($this->title) ?></title>
<h2>Информация о посылке №<?= $order->num_premise ?></h2>
<table class="table table-striped table-hover">
    <tr>
        <td>Отделение отправитель:</td>
        <td>№<?= Departments::findOne(['id_department' => $order->id_department])->num_department ?> Адрес: <?= Departments::findOne(['id_department' => $order->id_department])->address_department ?></td>
    </tr>
    <tr>
        <td>Отделение получатель:</td>
        <td>№<?= Departments::findOne(['id_department' => $order->id_dep_rec])->num_department ?> Адрес: <?= Departments::findOne(['id_department' => $order->id_dep_rec])->address_department ?></td>
    </tr>
    <tr>
        <td>Номер телефона получателя:</td>
        <td>+<?= $order->phone_user ?></td>
    </tr>
    <tr>
        <td>ПИБ отправителя:</td>
        <td><?= $order->pib_sender ?></td>
    </tr>
    <tr>
        <td>ПИБ получателя:</td>
        <td><?= $order->pib_recipient ?></td>
    </tr>
    <tr>
        <td>Вес посылки:</td>
        <td><?= $order->weight_premise ?> кг.</td>
    </tr>
    <tr>
        <td>Длина посылки:</td>
        <td><?= $order->length_premise ?> см.</td>
    </tr>
    <tr>
        <td>Ширина посылки:</td>
        <td><?= $order->width_premise ?> см.</td>
    </tr>
    <tr>
        <td>Высота посылки:</td>
        <td><?= $order->width_premise ?> см.</td>
    </tr>
    <tr>
        <td>Тип посылки:</td>
        <td><?= TypePremise::findOne(['id_type' => $order->id_type])->name_type ?></td>
    </tr>
    <tr>
        <td>Цена посылки:</td>
        <td><?= $order->price_premise ?> грн.</td>
    </tr>
    <tr>
        <td>Цена доставки:</td>
        <td><?= $order->price_delivery ?> грн.</td>
    </tr>
    <?php if($order->reverse_delivery == NULL){
        echo "<tr>
        <td>Обратная доставка:</td>
        <td><input type='checkbox' checked='false'></td>
    </tr>";
    }else {
        echo "<tr>
        <td>Обратная доставка:</td>
        <td><input type='checkbox' checked='true'></td>
    </tr>";
        echo '<tr>
        <td>Тип обратной доставки:</td>
        <td>'.ReverseDelivery::findOne(['id_reverse_del' => $order->reverse_delivery])->type_reverse_del.'</td>
    </tr>';
    }
    ?>
    <?php if($order->packaging == NULL){
        echo "<tr>
        <td>Упаковка:</td>
        <td><input type='checkbox' checked='false'></td>
    </tr>";
    }else {
        echo "<tr>
        <td>Упаковка:</td>
        <td><input type='checkbox' checked='true'></td>
    </tr>";
        echo '<tr>
        <td>Тип упаковки:</td>
        <td>'.Packaging::findOne(['id_packaging' => $order->packaging])->type_packaging.'</td>
    </tr>';
    }
    ?>
    <?php if($order->packaging == NULL){
        echo "<tr>
        <td>Курьер:</td>
        <td><input type='checkbox' checked='false'></td>
    </tr>";
    }else {
        echo "<tr>
        <td>Курьер:</td>
        <td><input type='checkbox' checked='true'></td>
    </tr>";
        echo '<tr>
        <td>Адрес доставки:</td>
        <td>'.$order->address_delivery.'</td>
    </tr>';
    }
    ?>
    <tr>
        <td>Статус доставки:</td>
        <td><?= Status::findOne(['id_status' => $order->status])->name_status?> <?= Html::img('@web/img/'.Status::findOne(['id_status' => $order->status])->image_status) ?></td>
    </tr>
</table>

