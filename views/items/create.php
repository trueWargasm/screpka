<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemsModel */

$this->title = 'Create Items Model';
$this->params['breadcrumbs'][] = ['label' => 'Items Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
