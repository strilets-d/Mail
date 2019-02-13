<?php

namespace app\modules\profile;
use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
/**
 * profile module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\profile\controllers';

    /**
     * {@inheritdoc}
     */

    public $layout = 'profile';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    
}
