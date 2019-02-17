<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_payer".
 *
 * @property int $id_payer
 * @property string $name_payer
 *
 * @property Orders[] $orders
 */
class TypePayer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_payer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_payer'], 'required'],
            [['name_payer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_payer' => 'Id Payer',
            'name_payer' => 'Name Payer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['type_payer' => 'id_payer']);
    }
}
