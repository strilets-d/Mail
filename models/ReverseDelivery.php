<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reverse_delivery".
 *
 * @property int $id_reverse_del
 * @property string $type_reverse_del
 *
 * @property Orders[] $orders
 */
class ReverseDelivery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reverse_delivery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_reverse_del'], 'required'],
            [['type_reverse_del'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reverse_del' => 'Id Reverse Del',
            'type_reverse_del' => 'Type Reverse Del',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['reverse_delivery' => 'id_reverse_del']);
    }
}
