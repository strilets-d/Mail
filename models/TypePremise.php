<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_premise".
 *
 * @property int $id_type
 * @property string $name_type
 *
 * @property Orders[] $orders
 */
class TypePremise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_premise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_type'], 'required'],
            [['name_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_type' => 'Id типу',
            'name_type' => 'Назва типу',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_type' => 'id_type']);
    }
}
