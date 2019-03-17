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
    public $weight_premise;
    public $height_premise;
    public $length_premise;
    public $width_premise;
    public $type_premise;
    public $price_premise;
    public $type_payer;
    public $type_reverse_delivery;
    public $type_packaging;
    public $courier;
    public $city1;
    public $city2;
    public $price_delivery;

    public function rules()
    {
        return [
            [['weight_premise','height_premise','length_premise','width_premise','type_premise','price_premise','type_payer','courier','city1','city2'],'required', 'message' => 'Заповніть поле "{attribute}"']
        ];
    }

    public function attributeLabels()
    {
        return [
            'weight_premise' => 'Вага посилки',
            'length_premise' => 'Довжина посилки',
            'width_premise' => 'Ширина посилки',
            'height_premise' => 'Висота посилки',
            'city2' => 'Місто отримувач',
            'city1' => 'Місто відправник',
            'price_premise' => 'Ціна посилки',
            'type_premise' => 'Тип посилки',
            'type_payer' => 'Платник',
            'type_reverse_delivery' => 'Тип зворотньої доставки',
            'type_packaging' => 'Тип упаковки',
            'courier' => 'Курєр',
        ];
    }


    public  function  setPrice(){
        $sum = 0;
        if($this->weight_premise < 6) $sum += $this->weight_premise * 5;
        if($this->weight_premise < 11) $sum += 25 + 10;
        if($this->weight_premise < 16) $sum += 25 + 10 + 20;
        if($this->weight_premise < 21) $sum += 25 + 10 + 20 + 20;
        if($this->weight_premise < 26) $sum += 25 + 10 + 20 + 20 + 20;
        if($this->weight_premise > 25) $sum += 25 + 10 + 20 + 20 + 20 + $this->weight_premise * 4;
        $sum  +=  $this->price_premise / 200;
        switch ($this->type_packaging) {
            case 1:
                $sum += 10;
                break;
            case 2:
                $sum += 15;
                break;
            case 3:
                $sum += 8;
                break;
            case 4:
                $sum += 30;
                break;
            case 5:
                $sum += 15;
                break;
            case 6:
                $sum += 29;
                break;
            default:
                $sum += 50;
                break;
        }
        if(($this->length_premise<=100 && $this->width_premise<=100 && $this->height_premise<=100))
        {
            $sum += $this->length_premise*0.2+$this->height_premise*0.2+$this->width_premise*0.2;
        }else
            if(($this->length_premise<=200 && $this->width_premise<=200 && $this->height_premise<=200)){
                $sum +=  $this->length_premise*0.4+$this->height_premise*0.4+$this->width_premise*0.4;
            }else
                if($this->length_premise<=300 && $this->length_premise<=300 && $this->width_premise<=300)
                {
                    $sum += $this->length_premise*0.7+$this->height_premise*0.7+$this->width_premise*0.7;
                }else
                    if($this->length_premise>=300 && $this->width_premise>=300 && $this->height_premise>=300)
                    {
                        $sum += $this->length_premise*1.5+$this->height_premise*1.5+$this->width_premise*1.55;
                    }
        return round($sum);
    }
}