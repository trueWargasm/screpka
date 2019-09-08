<?php


namespace app\controllers;
use app\models\ItemsModel;
use Yii;

class BuilditemsController extends \yii\web\Controller
{


    public function actionGet(){
        $session = Yii::$app->session;
        $anketa = $session["anketa"];

        $h = $anketa["width"];
        $w =$anketa["length"];

        $headers = \Yii::$app->response->headers;
        $headers->set ('Access-Control-Allow-Origin', 'http://skrepka.demo');
        $headers->set ('Access-Control-Allow-Credentials', 'true');
        $headers->set ('Access-Control-Allow-Methods', 'GET, OPTIONS, POST, DELETE, PUT, HEAD, PATCH');
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $items = ItemsModel::find()
            ->where(['>=', 'status', 1])->all();

        $result = [];

        foreach($items as $item){
            $result[$item['item_id']] = [
                "id" => (string)"img_" . $item['item_id'],
                "title" => (string)$item['title'],
                "cost" => (string)$item['cost'],
                "width" => (string)$item['width'],
                "height" => (string)$item['height'],
                "src" => (string)$item['src'],
                "maxCount" =>  "3"
            ];
        }

        return $result;
    }
}
