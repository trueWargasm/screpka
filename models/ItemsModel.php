<?php


namespace app\models;


use yii\db\ActiveRecord;

class ItemsModel extends ActiveRecord
{
    public static function tableName()
    {
        return 'items';
    }

    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }
}