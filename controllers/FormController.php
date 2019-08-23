<?php

namespace app\controllers;

use app\models\AnketaForm;
Use Yii;

class FormController extends \yii\web\Controller
{
    public function actionIndex(){
        $formModel = new AnketaForm();

        if(Yii::$app->request->isPost){
            if ($formModel->load(Yii::$app->request->post(), '') && $formModel->validate()) {
                $session = Yii::$app->session;
                $session["step"] = 2;
                $session["anketa"] = json_encode($formModel, JSON_UNESCAPED_UNICODE);
               return $this->redirect('/build');
            } else {
                Yii::$app->session->setFlash('warning',"err");
            }
        }

        return $this->render('index', [
            "formModel" => $formModel
        ]);
    }
}
