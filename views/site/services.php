<?php

$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/services.css',['depends' =>'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);
$this->title = 'Услуги';
?>
<main class="content-container">
    <section class="main__services-tile stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main-news__header">
                        <h1 class="header-block header-block--bmrg">Услуги</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                foreach ($services as $service) {
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div>
                            <a href="<?=\yii\helpers\Url::to(['/site/servicesprofile/','id'=>$service->id])?>" class="info-block"
                               style="background: url(<?= $service->img ?>) no-repeat center;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;">
                                <div class="info-block__filter">
                                    <div class="info-block__content rule-padd-lr">
                                        <h3 class="header-block white-color">
                                            <?= $service->title ?>
                                        </h3>
                                        <span class="more-link white-color">Подробнее</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>
