<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string $title
 * @property string $item_id
 * @property string $src
 * @property int $cost
 * @property int $width
 * @property int $height
 * @property int $status
 */
class ItemsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src'], 'string'],
            [['cost', 'width', 'height', 'status'], 'integer'],
            [['title', 'item_id'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'item_id' => 'Внутренний ID',
            'src' => 'Картинка',
            'cost' => 'Стоимость',
            'width' => 'Ширина',
            'height' => 'Высота',
            'status' => 'Статус',
        ];
    }
}
