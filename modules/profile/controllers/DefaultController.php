<?php

namespace app\modules\profile\controllers;

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
    public function actionIndex()
    {
        return $this->render('index');
    }
}