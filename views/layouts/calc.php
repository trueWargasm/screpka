<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Застройка</title>
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>
<?= $content ?>
<div class="container">
    <div class="row">
        <div class="item-canvas">
            <div class="title-canvas">Застройка</div>
            <div id="dragBoard" class="dragBoard">
                <canvas id="canvas" class="canvas"></canvas>
            </div>
            <div class="bottom-canvas">Цена доп. оборудования: <span id="total"></span> руб</div>
            <button class="button" id="delete">удалить</button>
            <button class="button" id="next">далее</button>
        </div>

        <div class="item-rect">
            <div class="cloneBoard">
                <div class="title">Оборудование включенное в цену</div>
                <ul class="list" id="included_list"></ul>
            </div>

            <div class="cloneBoard">
                <div class="title">Дополнительное оборудование</div>
                <ul class="list" id="additional_list"></ul>
            </div>
            <div>
            </div>
        </div>

        <div id="windowPopup" class="window-wrap">
            <div class="window">
                <span id="closeBtn" class="closeBtn">&#215</span>
                <div class="window-body"><div id="msg"></div></div>
                <div class="window-footer">
                    <button class="button" id="confirmDelete">ok</button>
                    <button class="button" id="confirmDefault">ok</button>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="/libs/fabric/fabric.js"></script>
        <script type="text/javascript" src="/libs/jquery/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="/libs/jquery/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="/libs/jquery/jquery-ui.js"></script>
        <script src="/js/common.min.js"></script>
</body>
</html>