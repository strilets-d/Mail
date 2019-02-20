<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 17.02.2019
 * Time: 23:31
 */

namespace app\models;


use yii\base\Model;

class TimeCalculator extends  Model
{
    public $date;
    public $city_one;
    public $city_two;

    public function rules()
    {
        return [
            ['date', 'required'],
            ['city_one', 'required'],
            ['city_two', 'required'],
        ];

    }

    public function attributeLabels()
    {
        return [
            'date' => 'Дата відправки',
            'city_one' => 'Місто відправник',
            'city_two' => 'Місто отримувач',
        ];
    }
}