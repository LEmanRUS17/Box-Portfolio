<?= $this->render('/partials/boxIntro.php') ?>



<!-- portfolio div -->
<div class="portfolio-div">
    <div class="portfolio">
        <div class="no-padding portfolio_container">

            <!-- single work -->
            <?php foreach ($projects as $project) : ?>
                <?php $mainImg = $project->getImage(); ?>
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="<?= yii\helpers\Url::toRoute(['home/project', 'id' => $project->id]); ?>" class="portfolio_item">
                        <?= yii\helpers\Html::img($mainImg->getUrl(), ['alt' => "image", 'class' => 'img-responsive']) ?>
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span><?= $project->title ?></span>
                                    <em>Fashion / Logo</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-6 col-sm-12 photography">
                <a href="single-project.html" class="portfolio_item">
                    <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Photorealistic smartwatch</span>
                                <em>Photography</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->


        </div>
        <!-- end portfolio_container -->
    </div>
    <!-- portfolio -->
</div>
<!-- end portfolio div -->