<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id_review
 * @property int $id_user
 * @property string $text_review
 * @property string $date_review
 *
 * @property User $user
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'text_review'], 'required'],
            [['id_user'], 'integer'],
            [['date_review'], 'safe'],
            [['text_review'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_review' => 'Id Відгуку',
            'id_user' => 'Id Користувача',
            'text_review' => 'Текст відгуку',
            'date_review' => 'Дата відгуку',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser(){
        return User::findOne($this->id_user);
    }
}
