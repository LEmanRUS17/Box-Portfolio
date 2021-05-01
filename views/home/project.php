<!-- top-bar -->
<div class="top-bar">
    <h1><?= $project->title ?></h1>
    <p><a href="#">Home</a> / <a href="#">portfolio</a> / project title</p>
</div>
<!-- end top-bar -->

<?php
    $mainImg = $project->getImage();
    $gallery = $project->getImages();
?>

<!-- main-container -->
<div class="container main-container">
    <div class="col-md-12 container-center">
        <?= yii\helpers\Html::img($mainImg->getUrl(), [/*'alt' => $project->name,*/ 'class' => 'img-responsive']) ?>
        <!--<img src="http://placehold.it/1920x1080" alt="" class="img-responsive" />-->
        <div class="h-30"></div>
    </div>

    <div class="col-md-12">
        <h3 class="text-uppercase"><?= $project->title ?></h3>
        <h5><?= $project->description ?></h5>
        <div class="h-30"></div>
    </div>

    <div class="col-md-9">
        <?= $project->content ?>
    </div>

    <div class="col-md-3">
        <ul class="cat-ul">
            <li><i class="ion-ios-circle-filled"></i> Design</li>
            <li><i class="ion-ios-circle-filled"></i> consectetur adipiscing</li>
            <li><i class="ion-ios-circle-filled"></i> et gubernationis</li>
            <li><i class="ion-ios-circle-filled"></i> Aliter enim nosmet</li>
        </ul>
        <div class="h-10"></div>
        <h4>Share</h4>
        <ul class="social-ul">
            <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
            <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
            <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
            <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
        </ul>
    </div>
</div>
<!-- end main-container -->