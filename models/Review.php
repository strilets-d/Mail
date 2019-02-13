<?php
namespace app\models;

use yii\base\Model;
use yii;
use yii\db\ActiveRecord;

class Review extends ActiveRecord
{
	
	public function getUser(){
		return User::findOne($this->id_user);
	}
}
?>