<?php

namespace app\controllers;


use app\models\Cities;
use app\models\OrderSearch;
use app\models\TimeCalculator;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Orders;

class MailController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSearch()
    {
        $model = new OrderSearch();
        if(isset($_POST['OrderSearch'])){
            $model->attributes = Yii::$app->request->post('OrderSearch');
            $order = Orders::findOne(['num_premise' => $model->num_premise]);
            if(Yii::$app->user->identity->id != NULL) {
                $order->id_user = Yii::$app->user->identity->id;
                $order->save();
            }
             return $this->render('view', ['order' => $order]);
        }
        else
        return $this->render('search', ['model' => $model]);
    }

    public function actionTime()
    {
        $model = new TimeCalculator();
        if(isset($_POST['TimeCalculator'])){
            $model->attributes = Yii::$app->request->post('TimeCalculator');
            //var_dump($model); die();
            $city1 = Cities::findOne(['id_city' => $model->city_one]);
            $city2 = Cities::findOne(['id_city' => $model->city_two]);
            return $this->render('map',['city1' => $city1, 'city2' => $city2]);
        }
        return $this->render('calctime',['model' => $model]);
    }
}