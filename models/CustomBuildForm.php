<?php


namespace app\models;


use yii\base\Model;

class CustomBuildForm extends Model
{
    public $power, $coldWater, $hotWater;

    public function rules()
    {
        return [
            [['power', 'coldWater', 'hotWater'] , 'required'],
            [['csrf'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'power' => 'Электричество Вт.',
            'coldWater' => 'Холодная вода',
            'hotWater' => 'Горячая вода',

        ] ;
    }
}