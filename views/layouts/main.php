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
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/css/milligram.css">
    <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/jquery-steps.css">
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="container">
        <div class="row">
            <div class="column header-column">
                <a href="https://skrepkaexpo.ru" class="logo">Skrepka Expo</a>
            </div>
        </div>
    </div>
</header>
<main>
    <?= Alert::widget() ?>
        <?= $content ?>
</main>
<script type="text/javascript" src="./libs/fabric/fabric.js"></script>
<script type="text/javascript" src="./libs/jquery/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="./libs/jquery/jquery-1.12.4.js"></script>
<script type="text/javascript" src="./libs/jquery/jquery-ui.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
