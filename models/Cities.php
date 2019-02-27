<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property int $id_city
 * @property string $name_city
 * @property string $lat
 * @property string $lng
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_city', 'lat', 'lng'], 'required'],
            [['name_city'], 'string', 'max' => 255],
            [['lat', 'lng'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_city' => 'Id City',
            'name_city' => 'Name City',
            'lat' => 'Lat',
            'lng' => 'Lng',
        ];
    }
}
