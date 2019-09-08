<?php


namespace app\controllers;


use app\models\ServiceForm;

class ServiceController  extends \yii\web\Controller
{
    public function actionIndex(){
        $formModel = new ServiceForm();
        $session = \Yii::$app->session;

        $anketa = $session["anketa"];
        $h = $anketa["width"];
        $w = $anketa["length"];

        $sqr = $w*$h;

        $formModel->square = $sqr;
        $this->layout = 'service';
        return $this->render('index', ["formModel" => $formModel, "sqr" => $sqr ]);
    }
}