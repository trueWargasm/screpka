<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Items Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'item_id',
            'src:image',
            'cost',
            //'width',
            //'height',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
