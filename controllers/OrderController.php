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
        $stand = $session["stand"];

        $h= $stand["width"];
        $w= $stand["length"];

        $services = json_decode($session["service"]);
        $anketa = $session["anketa"];
        $build = $session["build"];

        return $this->render('verify', ['phpWidth' => $w, 'phpLength' => $h, 'services' => $services]);
    }

}
