<?php


namespace app\models;


use yii\base\Model;

class ServiceForm extends Model
{
    public  $car,
            $truck,
            $cleanup_days,
            $internet,
            $radio_ads,
            $site_ads,
            $pavilion_ads,
            $conferences,
            $vip_parking,
            $no_cleanup,
            $no_cars,
            $no_vip;

    public $square;

}