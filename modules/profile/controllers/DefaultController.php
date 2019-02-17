<?php

namespace app\modules\profile\controllers;

use app\models\Orders;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\UserChangeForm;
/**
 * Default controller for the `profile` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionMy()
    {
        $query = Orders::find()->where(['id_user' => Yii::$app->user->identity->id]);
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
        ]);
        $orders = $query->orderBy('id_order')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('my', ['orders' => $orders,
            'pagination' => $pagination,
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
