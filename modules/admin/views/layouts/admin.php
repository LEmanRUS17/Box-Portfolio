<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="/web/favicon.ico">
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="<?= Url::home() ?>"><img src="/web/img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
        <ul class="list-inline admin">
            <li><a href="<?= Url::toRoute(['/admin/project']) ?>">Проекты</a></li>
            <li><a href="<?= Url::toRoute(['/admin/category']) ?>">Категории</a></li>
        </ul>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->
    </div>


    <div class="container main-container">
        <?= $content ?>
    </div>

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>