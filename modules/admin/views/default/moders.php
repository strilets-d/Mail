<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 20.03.2019
 * Time: 23:03
 */

use app\models\Orders;

?>
<div style="margin-top:50px;">
<div>Дата початку:<?php $s = new DateTime('first day of this month');
    echo $s->format('Y-m-d');?>
</div>
<div>Дата кінця:<?php
    echo date('Y-m-t', time());?>
</div>
</div>
<div style="display:inline-flex; width:100%; margin-top:10px; min-height: 100%;" >
<div style="width: 50%;">Працівники:</div>
<div style="width: 50%;">Кількість опрацьованих посилок:</div>
</div>
<div style="border-bottom: 1px solid silver; margin-top:10px; margin-bottom: 10px;"></div>
<?php
foreach ($users as $user): ?>
<div style="display:inline-flex; width:100%;" >
    <div style="width: 50%;"><?= $user->pib?>(<?= $user->username?>)</div>
    <div>
<?php
$orders = Orders::find()->where(['id_moder' => $user->id])->all();
$count=0;
$s = new DateTime('first day of this month');
$d = $s->format('Y-m-d');
$t = date('Y-m-t', time());
foreach ($orders as $order):
    if(($order->date_order > $d) &&  ($order->date_order < $t)){$count++;}
endforeach;
    echo $count;
?>
    </div>
</div>
    <div style="border-bottom: 1px solid silver; margin-top:10px; margin-bottom: 10px;"></div>
<?php endforeach; ?>
