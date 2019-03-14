<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 14.03.2019
 * Time: 8:34
 */
namespace app\models;

use Yii;
use yii\base\Model;


class PriceCalc extends  Model
{
    public $weight;
    public $height;
    public $length;
    public $width;
    public $type_premise;
    public $price_premise;
    public $type_payer;
    public $type_reverse_delivery;
    public $type_packaging;
    public $courier;
    public $city1;
    public $city2;

    public function rules()
    {
        return [
            [['weight','height','length','width','type_premise','price_premise','type_payer','type_reverse_delivery','type_packaging','courier','city1','city2'],'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Посилки',
            'num_premise' => 'Номер посилки',
            'id_department' => 'Відділення відправник',
            'phone_user' => 'Телефон',
            'pib_sender' => 'Прізвище відправника',
            'pib_recipient' => 'Прізвище отримувача',
            'weight_premise' => 'Вага посилки',
            'length_premise' => 'Довжина посилки',
            'width_premise' => 'Ширина посилки',
            'height_premise' => 'Висота посилки',
            'id_type' => 'Тип посилки',
            'id_dep_rec' => 'Відділення отримувач',
            'price_premise' => 'Ціна посилки',
            'price_delivery' => 'Ціна доставки',
            'type_payer' => 'Платник',
            'reverse_delivery' => 'Тип зворотньої доставки',
            'packaging' => 'Тип упаковки',
            'courier' => 'Курєр',
            'address_delivery' => 'Адреса доставки',
            'status' => 'Статус доставки',
            'id_user' => 'Користувач',
        ];
    }

}