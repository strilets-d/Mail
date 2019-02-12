<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Review extends ActiveRecord
{
	public $text;

	 public static function tableName()
    {
        return '{{review}}';
    }

	public function getUser(){
		return User::findOne($this->id_user);
	}

	public function rules(){
		return [
			['text','required'],
		];
	}

	public function attributeLabels(){
		return [
			'text' => 'Отзыв',
		];
	}

	public function write(){
		 $review = new Review();
        $review->id_user = Yii::$app->user->identity->id;
        $review->text_review = $this->text;
        return $user->save(); //вернет true или false
	}

}
?>