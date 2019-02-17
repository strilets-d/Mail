<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id_order
 * @property int $num_premise
 * @property int $id_department
 * @property string $phone_user
 * @property string $pib_sender
 * @property string $pib_recipient
 * @property int $weight_premise
 * @property int $length_premise
 * @property int $width_premise
 * @property int $height_premise
 * @property int $id_type
 * @property int $id_dep_rec
 * @property int $price_premise
 * @property int $price_delivery
 * @property int $type_payer
 * @property int $reverse_delivery
 * @property int $packaging
 * @property int $courier
 * @property string $address_delivery
 * @property int $status
 * @property int $id_user
 *
 * @property TypePayer $typePayer
 * @property Departments $depRec
 * @property Departments $department
 * @property TypePremise $type
 * @property ReverseDelivery $reverseDelivery
 * @property Status $status0
 * @property User $user
 * @property Packaging $packaging0
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_premise', 'id_department', 'phone_user', 'pib_sender', 'pib_recipient', 'weight_premise', 'length_premise', 'width_premise', 'height_premise', 'id_type', 'price_premise', 'type_payer', 'courier'], 'required'],
            [['num_premise', 'id_department', 'weight_premise', 'length_premise', 'width_premise', 'height_premise', 'id_type', 'id_dep_rec', 'price_premise', 'price_delivery', 'type_payer', 'reverse_delivery', 'packaging', 'courier', 'status', 'id_user'], 'integer'],
            [['phone_user', 'pib_sender', 'pib_recipient', 'address_delivery'], 'string', 'max' => 255],
            [['type_payer'], 'exist', 'skipOnError' => true, 'targetClass' => TypePayer::className(), 'targetAttribute' => ['type_payer' => 'id_payer']],
            [['id_dep_rec'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['id_dep_rec' => 'id_department']],
            [['id_department'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['id_department' => 'id_department']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => TypePremise::className(), 'targetAttribute' => ['id_type' => 'id_type']],
            [['reverse_delivery'], 'exist', 'skipOnError' => true, 'targetClass' => ReverseDelivery::className(), 'targetAttribute' => ['reverse_delivery' => 'id_reverse_del']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id_status']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['packaging'], 'exist', 'skipOnError' => true, 'targetClass' => Packaging::className(), 'targetAttribute' => ['packaging' => 'id_packaging']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'num_premise' => 'Num Premise',
            'id_department' => 'Id Department',
            'phone_user' => 'Phone User',
            'pib_sender' => 'Pib Sender',
            'pib_recipient' => 'Pib Recipient',
            'weight_premise' => 'Weight Premise',
            'length_premise' => 'Length Premise',
            'width_premise' => 'Width Premise',
            'height_premise' => 'Height Premise',
            'id_type' => 'Id Type',
            'id_dep_rec' => 'Id Dep Rec',
            'price_premise' => 'Price Premise',
            'price_delivery' => 'Price Delivery',
            'type_payer' => 'Type Payer',
            'reverse_delivery' => 'Reverse Delivery',
            'packaging' => 'Packaging',
            'courier' => 'Courier',
            'address_delivery' => 'Address Delivery',
            'status' => 'Status',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypePayer()
    {
        return $this->hasOne(TypePayer::className(), ['id_payer' => 'type_payer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepRec()
    {
        return $this->hasOne(Departments::className(), ['id_department' => 'id_dep_rec']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Departments::className(), ['id_department' => 'id_department']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(TypePremise::className(), ['id_type' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReverseDelivery()
    {
        return $this->hasOne(ReverseDelivery::className(), ['id_reverse_del' => 'reverse_delivery']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id_status' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackaging0()
    {
        return $this->hasOne(Packaging::className(), ['id_packaging' => 'packaging']);
    }
}
