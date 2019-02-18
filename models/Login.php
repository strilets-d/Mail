<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
    public $username;
    public $password;


    public function rules()
    {
        return [

            [['username','password'],'required', 'message' => 'Заповніть поле {attribute}'],
            ['password','validatePassword'],
        ];
    }

    public function validatePassword($attribute,$params)
    {
        if(!$this->hasErrors())
        {
            $user = $this->getUser();

            if(!$user || !$user->validatePassword($this->password))
            {
                $this->addError($attribute,'Логін або пароль введено невірно.');
            }
        }
    }

    public function getUser()
    {
        return User::findOne(['username'=>$this->username]);
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логін',
            'password' => 'Пароль',
        ];
    }

}