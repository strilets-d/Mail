<?php

namespace app\controllers;


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
            var_dump($_POST['TimeCalculator']); die();
        }
        return $this->render('calctime',['model' => $model]);
    }
}