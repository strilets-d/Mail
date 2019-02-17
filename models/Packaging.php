<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "packaging".
 *
 * @property int $id_packaging
 * @property string $type_packaging
 *
 * @property Orders[] $orders
 */
class Packaging extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packaging';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_packaging'], 'required'],
            [['type_packaging'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_packaging' => 'Id Packaging',
            'type_packaging' => 'Type Packaging',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['packaging' => 'id_packaging']);
    }
}
