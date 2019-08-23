<?php


namespace app\models;

use Yii;
use yii\base\Model;
class OrderForm extends Model
{
    public $id;
    public $created_at;
    public $updated_at;
    public $status;
    public $slug;
    public $json;

    public function rules(){
        return [
            [['id', 'created_at', 'updated_at', 'status', 'slug', 'json'], 'safe']
        ];
    }
}