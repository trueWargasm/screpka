<?php


namespace app\controllers;
use app\models\CustomBuildForm;
Use Yii;

class BuildController extends \yii\web\Controller
{
    public function actionIndex(){
        $session = Yii::$app->session;



        //if($session->isActive && $session["step"] == 2){
            return $this->render("index");
        //} else {
        //    return $this->redirect("/");
        //}

    }

    public function actionCustom(){
        $modelFrom =  new CustomBuildForm();

        if(Yii::$app->request->isPost){
            if ($modelFrom->load(Yii::$app->request->post(), '') && $modelFrom->validate()) {
                $session = Yii::$app->session;
                $session["step"] = 3;
                $session["build_type"] = "custom";
                $session["build"] = json_encode($modelFrom, JSON_UNESCAPED_UNICODE);
                $this->redirect('/service');
            }else {
                Yii::$app->session->setFlash('warning',json_encode($modelFrom));
            }
        }

        return $this->render("custom", ['formModel' => $modelFrom]);
    }

    public function actionStandart(){
        $session = Yii::$app->session;
        $anketa = json_decode($session["anketa"],1);


        $h= $anketa["width"];
        $w=$anketa["length"];
        $this->layout = 'calc';
        return $this->render('empty', ['phpWidth' => $w, 'phpLength' => $h]);


    }
}