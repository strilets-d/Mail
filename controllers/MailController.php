<?php

namespace app\controllers;


use app\models\Cities;
use app\models\Departments;
use app\models\OrderSearch;
use app\models\PriceCalc;
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
            $index = 0;
            if($order == NULL){
                $index = 1;
                return $this->render('search', ['model' => $model,'index' => $index]);
            }else {
                if (Yii::$app->user->identity->id != NULL) {
                    $order->id_user = Yii::$app->user->identity->id;
                    $order->save();
                }
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

    public function actionPrice(){
        $model = new PriceCalc();
        $sum = NULL;
        if(isset($_POST['PriceCalc'])){
            $model->attributes = Yii::$app->request->post('PriceCalc');
            $sum = $model->setPrice();
            return $this->render('price',[
                'model' => $model,
                'sum' => $sum
            ]);
        }
        return $this->render('price',[
            'model' => $model,
            'sum' => $sum
        ]);
    }

    public function actionDepartment(){
        $departments = Departments::find()->all();
        return $this->render('department',[
            'departments' => $departments
        ]);
    }
}