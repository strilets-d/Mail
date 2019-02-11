<?php

namespace app\models;

use yii\base\Model;

class Signup extends Model
{
    public $username;
    public $password;
    public $pib;
    public function rules()
    {
        return [

            [['username','password','pib'],'required'],
            ['username','unique','targetClass'=>'app\models\User'],
            ['password','string','min'=>2,'max'=>10]
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->username = $this->username;
        $user->pib = $this->pib;
        $user->setPassword($this->password);
        return $user->save(); //вернет true или false
    }

}