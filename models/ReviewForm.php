<?php
namespace app\models;

use yii\base\Model;
use yii;

class ReviewForm extends Model
{
	public $text;
	public $id;
	 public static function tableName()
    {
        return '{{review}}';
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

	public function review(){
		 $review = new Review();
        $review->id_user = Yii::$app->user->identity->id;
        $review->text_review = $this->text;
        $review->save();
	}

}
?>