<?php

/* @var $this yii\web\View */
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/news.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/index.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/slides.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyABvqNSAslrpLr5Zbp8EJpPE7IwFiPsH7o&callback=initMap',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/slider.js',['depends' =>'app\assets\ApppAsset']);

$this->title = 'РЦИ Региональный центр инжиниринга Республики Алтай';


?>
<section class="header__intro-block stock-sec-padd first-sec-top-padd">
    <div class="container">
        <div class="row between-md">
                <div class="col-md-6 col-sm-9 col-xs-12 first-md">
                    <div class="content__left">
                        <h1 class="header-block">
                            Государственная поддержка модернизации малого и среднего предпринимательства <br>в Республике Алтай
                        </h1>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 first-xs">
                    <div class="content__right">
                        <img src="/web/img/icon/mybis.png" class="img-responsive">
                    </div>
                </div>

        </div>
    </div>
</section>
<main class="content-container">
    <!-- Секция слайдера -->
    <section class="main__slider stock-sec-padd ">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <!-- Родительская обертка слайдера START -->
                    <div class="slideshow-container">
                        <?php
                        foreach ($slider as $item) {
                            ?>
                            <!-- Тело слайда (обновляемая часть) -->
                            <div class="slideshow-container__slide fade">
                                <div class="slide__desc">
                                    <div class="desc__anons">
                                        <div class="anons__header">
                                            <h1 class="header-block header-mainSlider"><?=$item->title?></h1>
                                        </div>
                                        <div class="anons__text base-text">
                                            <?=$item->content?>
                                        </div>


                                        <!-- Футтер блока desc (для кнопок и других функциональных частей) -->

                                        <div class="anons__footer">
                                            <div class="btn-group">
                                                <a href="<?=$item->url?>" class="btn one-btn">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slideshow-container__img"
                                     style="background: url(<?=$item->img?>) no-repeat center;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></div>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- Обертка кнопок переключения -->
                        <div class="slideshow-container__btn">
                            <div class="btn-group">
                                <a class="btn pag-btn prev" onclick="plusSlides(-1)">
                                    <svg viewBox="0 0 477.175 477.175">
                                        <g>
                                            <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                                        </g>
                                    </svg>
                                </a>
                                <a class="btn pag-btn next" onclick="plusSlides(1)">
                                    <svg viewBox="0 0 477.175 477.175">
                                        <g>
                                            <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5   c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Позиция (автоматизировать) -->
                        <div class="slideshow-container__dots">
                            <?php
                            $i=1;
                            foreach ($slider as $item) {
                            ?>
                            <span class="slide-dots" onclick="currentSlide(<?=$i?>)"></span>
                                <?php
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Родительская обертка слайдера END -->
                </div>
            </div>
        </div>
    </section>
    <section class="main__main-news stock-sec-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="main-news__header">
                        <h1 class="header-block header-block--bmrg">Новости и события</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $i=1;
                foreach ($news as $item) {
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news-block rule-padd-lr">
                            <div class="news-block__header">
                                <div class="header__publ-type"><?php
                                    if ($item->event==0){
                                        echo "Новость";
                                    }else{
                                        echo "Событие";
                                    }
                                    ?></div>
                                <h3 class="header-block"><?= mb_substr(strip_tags($item->title), 0, 70).'...'?></h3>
                            </div>
                            <div class="news-block__anons base-text">
                                <?= mb_substr(strip_tags($item->content), 0, 100).'...'?>
                            </div>
                            <div class="news-block__footer">
                                <a href="<?=\yii\helpers\Url::to(['/site/newsfull/','id'=>$item->id])?>" class="more-link">Подробнее</a>
                                <span class="footer__news-date"><?=date("d.m.Y", strtotime($item->date))?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($i>=6){
                        break;
                    }
                    $i++;
                }
                ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main-news__footer">
                        <div class="footer__left">
                            <div class="btn-group">
                                <a href="<?=\yii\helpers\Url::to(['/site/news/?type=2'])?>" class="btn one-btn">Смотреть все новости</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__main-contMap stock-sec-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="main-contMap__header">
                        <h1 class="header-block header-block--bmrg">Как нас найти</h1>
                    </div>
                    <div class="contacts-block">
                        <div class="contacts-block__desc rule-padd-lr-tb" itemscope itemtype="http://schema.org/Organization">
                            <div>
                                <h3 class="header-block" itemprop="name">РЦИ Региональный центр инжиниринга Республики Алтай</h3>
                            </div>
                                <div class="base-text" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span class="info-block__header">Адрес:</span><br/>
                                    <span itemprop="streetAddress">ул. Комсомольская, 9, 2 этаж</span>
                                    <span itemprop="postalCode">649006</span>
                                    <span itemprop="addressLocality">Горно-Алтайск</span>
                                </div>
                                <div class="base-text">
                                    <span class="info-block__header">Телефон:</span><br/>
                                    <span itemprop="telephone">+7 (38822) 4-72-41</span>
                                </div>
                                <div class="base-text">
                                    <span class="info-block__header">E-mail:</span><br/>
                                    <span itemprop="email">info@engineering-ra.ru</span>
                                </div>
                        </div>
                        <div class="contacts-block__map">
                            <div id="map" class="mapshow"></div>
                            <script>
                                var map;
                                function initMap() {
                                    map = new google.maps.Map(document.getElementById('map'), {
                                        center: {
                                            lat: 51.9545683,
                                            lng: 85.94693419
                                        },
                                        zoom: 18
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
