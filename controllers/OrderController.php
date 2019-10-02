<?php

namespace app\controllers;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionVerify()
    {
        $session = \Yii::$app->session;
        echo "<pre>";
        var_dump($_SESSION);
        exit();
    }

}
