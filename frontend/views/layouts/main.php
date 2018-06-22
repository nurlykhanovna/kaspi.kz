<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\components\LanguageDropdown;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel=stylesheet href='/frontend/web/css/qazlatyn.css'>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../web/js/code.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117372022-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117372022-1');
    </script>

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <nav class="navbar navbar-default" style=" background-color: #4a4a4a; height: 70px" >

        <div class="container">
            <ul class=" nav navbar-nav " style="margin-top: 15px">
                <li class="nav-item"><a  class="nav-link" href="/"><img src="/frontend/web/images/l1.png" style="margin-top: -15px"></a></li>
                <li class="nav-link"><a class="nav-link"  href="#" style="color: white; font-size: 16px;padding-right:  25px">Магазин</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white;font-size: 16px;padding-right:  25px">Платежи</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;padding-right:  25px">Мой Банк</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;padding-right:  25px">Red</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;padding-right:  25px">Бонус</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;padding-right:  25px">Гид</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;padding-right:  25px">Maps</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;padding-right:  50px">Переводы</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><img src="/frontend/web/images/logo.png" style="margin-top: -10px"></a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white; font-size: 16px;">Алматы</a></li>
                <li class="nav-item"><a class="nav-link" href="site/login"><img src="/frontend/web/images/login.jpg" style="margin-top: -15px"></a></li><?if (!Yii::$app->user->isGuest) echo Yii::$app->user->identity->username;?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p style="font-size: 16px;" <a href="#" style="color: grey" >Created by Alima Seytkhan</a></p>
        <p style="font-size: 16px; "><a href="#" style="color: grey">Пользовательское соглашение</a>  © by International IT University </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
