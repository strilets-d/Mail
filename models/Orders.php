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
            [['id_department', 'phone_user', 'pib_sender', 'pib_recipient', 'weight_premise', 'length_premise', 'width_premise', 'height_premise', 'id_type', 'price_premise', 'type_payer', 'courier'], 'required'],
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

    public function getNum($length=8) {

        if($this->num_premise==NULL) {
            $num= join('', array_map(function($value) { return $value == 1 ? mt_rand(1, 9) : mt_rand(0, 9); }, range(1, $length)));
            $nums = Orders::find()->where(['num_premise' => $num])->all();
            while($nums!=NULL){
                $num= join('', array_map(function($value) { return $value == 1 ? mt_rand(1, 9) : mt_rand(0, 9); }, range(1, $length)));
                $nums = Orders::find()->where(['num_premise' => $num]);
            }
            return $num;
        }else return $this->num_premise;
    }

    public function getSum()
    {
        $sum = 0;
        if($this->weight_premise < 6) $sum += $this->weight_premise * 5;
        if($this->weight_premise < 11) $sum += 25 + 10;
        if($this->weight_premise < 16) $sum += 25 + 10 + 20;
        if($this->weight_premise < 21) $sum += 25 + 10 + 20 + 20;
        if($this->weight_premise < 26) $sum += 25 + 10 + 20 + 20 + 20;
        if($this->weight_premise > 25) $sum += 25 + 10 + 20 + 20 + 20 + $this->weight_premise * 4;
        $sum  +=  $this->price_premise / 200;
        switch ($this->packaging) {
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
        if(($this->length_premise<=100 || $this->width_premise<=100 || $this->height_premise<=100))
        {    
            $sum += $this->length_premise*0.2+$this->height_premise*0.2+$this->width_premise*0.2;
        }else 
        if(($this->length_premise<=200 || $this->width_premise<=200 || $this->height_premise<=200)){
            $sum +=  $this->length_premise*0.4+$this->height_premise*0.4+$this->width_premise*0.4;
        }else 
        if($this->length_premise<=300 || $this->length_premise<=300 || $this->width_premise<=300)
        {
            $sum += $this->length_premise*0.7+$this->height_premise*0.7+$this->width_premise*0.7;
        }else
        if($this->length_premise>=300 || $this->width_premise>=300 || $this->height_premise>=300)
        {
            $sum += $this->length_premise*1.5+$this->height_premise*1.5+$this->width_premise*1.5;
        }
        return round($sum);
    }
}
