<?php

namespace app\controllers;

use app\models\ServiceForm;

class ServiceController  extends \yii\web\Controller
{
    public function actionIndex(){
        $session = \Yii::$app->session;

        if(\Yii::$app->request->getIsPost()) {
            $session["service"] = json_encode(\Yii::$app->request->post());

            return $this->redirect("/order/verify");
        }

        $stand = $session["stand"];
        $h = $stand["width"];
        $w = $stand["length"];

        $sqr = $w*$h;

        $this->layout = 'service';
        return $this->render('index', ["sqr" => $sqr ]);
    }
}