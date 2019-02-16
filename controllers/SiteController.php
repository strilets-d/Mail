<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;
use yii\data\Pagination;
use app\models\ReviewForm;
use app\models\Review;

class SiteController extends Controller
{
    public function actionIndex()
    {

        $query = Review::find();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $reviews = $query->orderBy('date_review')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            if(!Yii::$app->user->isGuest){
                $model = new ReviewForm();
            if(isset($_POST['ReviewForm']))
            {
            $model->attributes = Yii::$app->request->post('ReviewForm');
            if($model->validate() && $model->review())
            {
                
                return $this->redirect(['index']);
            }
            }
        }
        $check_model = new ReviewForm();
            return $this->render('index', [
            'reviews' => $reviews,
            'pagination' => $pagination,
            'review_model' => $model,
            'model' => $check_model,
        ]);
    }
    


    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }

    public function actionSignup()
    {
        if(!Yii::$app->user->isGuest){
            $this->goHome();
        }
        $model = new Signup();

        if(isset($_POST['Signup']))
        {
            $model->attributes = Yii::$app->request->post('Signup');

            if($model->validate() && $model->signup())
            {
                return $this->redirect(['index']);
            }
        }

        return $this->render('signup',['model'=>$model]);
    }

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
    }

}
