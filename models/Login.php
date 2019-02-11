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

            [['username','password'],'required'],
            ['password','validatePassword'] //собственная функция для валидации пароля
        ];
    }

    public function validatePassword($attribute,$params)
    {
        if(!$this->hasErrors()) // если нет ошибок в валидации
        {
            $user = $this->getUser(); // получаем пользователя для дальнейшего сравнения пароля

            if(!$user || !$user->validatePassword($this->password))
            {
                //если мы НЕ нашли в базе такого пользователя
                //или введенный пароль и пароль пользователя в базе НЕ равны ТО,
                $this->addError($attribute,'Пароль или имейл введены неверно');
                //добавляем новую ошибку для атрибута password о том что пароль или имейл введены не верно
            }
        }
    }

    public function getUser()
    {
        return User::findOne(['username'=>$this->username]); // а получаем мы его по введенному имейлу
    }


}