<?php


namespace app\controllers;
use app\models\CustomBuildForm;
Use Yii;

class BuildController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex(){

        if(Yii::$app->request->isPost) {
            $session = Yii::$app->session;
            $session["stand"] = [
                "width" => (int) Yii::$app->request->post("width"),
                "length" => (int) Yii::$app->request->post("length")
                ];

            return $this->redirect("./build/standart");
        }
        return $this->render("index");
    }

    public function actionCustom(){
        $modelFrom =  new CustomBuildForm();

        if(Yii::$app->request->isPost){
            if ($modelFrom->load(Yii::$app->request->post(), '') && $modelFrom->validate()) {
                $session = Yii::$app->session;
                $session["step"] = 3;
                $session["build_type"] = "custom";
                $session["build"] = $modelFrom->toArray();
                $this->redirect('/service');
            }else {
                Yii::$app->session->setFlash('warning',json_encode($modelFrom));
            }
        }

        return $this->render("custom", ['formModel' => $modelFrom]);
    }

    public function actionStandart(){
        $session = Yii::$app->session;
        $stand = $session["stand"];

        $h= $stand["width"];
        $w= $stand["length"];
        $this->layout = 'calc';
        return $this->render('empty', ['phpWidth' => $w, 'phpLength' => $h]);


    }

    public function actionSavebuild(){
        $session = Yii::$app->session;
        $session["step"] = 3;
        $session["build_type"] = "standart";
        Yii::$app->response->format = 'json';

        $session["build"] = Yii::$app->request->post();

        return $session;
    }
}