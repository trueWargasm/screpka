<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemsModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'src')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
