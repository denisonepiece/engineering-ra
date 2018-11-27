<?php

$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/about.css',['depends' =>'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);

$this->title = $page->title;
?>

<main class="content-container">
    <section class="main__about stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="news-tile__header">
                        <h1 class="header-block header-block--bmrg-under"><?=$page->title?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                    <div class="base-text">
                        <?= $page->content ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
