<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
class ImageUpload extends Model {

	public $image;

	public function uploadFile(UploadedFile $file)
	{
		$this->image = $file;
		$filename = strtolower(uniqid($file->baseName) . '.' . $file->extension);

		$file->saveAs(Yii::getAlias('@web') . 'img/' . $filename);

		return $filename;
	}

	public function attributeLabels()
	{
		return [
			'Image' => 'Фото',
		];
	}
}