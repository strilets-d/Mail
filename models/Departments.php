<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $id_department
 * @property int $num_department
 * @property string $address_department
 *
 * @property Orders[] $orders
 * @property Orders[] $orders0
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_department', 'address_department'], 'required'],
            [['num_department'], 'integer'],
            [['address_department'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_department' => 'Id відділення',
            'num_department' => 'Номер відділення',
            'address_department' => 'Адреса відділення',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_dep_rec' => 'id_department']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders0()
    {
        return $this->hasMany(Orders::className(), ['id_department' => 'id_department']);
    }

    public function getFullDepartment(){
        return '№' . $this->num_department . ' ' . $this->address_department;
    }

    public function getCount(){
        return count(Departments::find()->all());
    }
}
