<?php


namespace app\models;


use yii\base\Model;

class AnketaForm extends Model
{
    public $cmpny, $hall,  $stand, $width, $length, $email, $fio, $_csrf;

    public function rules()
    {
        return [
            [['cmpny', 'hall', 'stand', 'width', 'length', 'email', 'fio' ], 'required'],
            [['email'], 'email'],
            [['csrf'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'cmpny' => 'Компания',
            'hall' => 'Зал',
            'stand' => 'Стенд',
            'width' => 'Ширина',
            'length' => 'Длина',
            'email' => 'Почта',
            'fio' => 'ФИО'
        ] ;
    }
}