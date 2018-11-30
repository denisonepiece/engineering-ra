<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/contacts.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyABvqNSAslrpLr5Zbp8EJpPE7IwFiPsH7o&callback=initMap',['depends' =>'app\assets\ApppAsset']);


$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);

$this->title = 'Контакты';
?>
<main class="content-container">
    <section class="main__contacts stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="contacts__header header-block-wrp--bmrg">
                        <h1 class="header-block header-block--bmrg-under">Контакты</h1>
                        <h2 class="header-block">Команда</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                foreach ($team as $item) {
                    ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contacts__team-card">
                            <div class="team-card__left">
                                <img src="<?=$item->img?>">
                            </div>
                            <div class="team-card__right base-text">
                                <div class="right__card-holder">
                                    <div class="card-holder__name"><?=$item->fio?></div>
                                    <div class="card-holder__post"><?=$item->position?></div>
                                </div>
                                <div class="right__cont">
                                    <div><img src="/web/img/svg_icon/phone-call.svg"><?=$item->tel?></div>
                                    <div><img src="/web/img/svg_icon/mail.svg"><?=$item->mail?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <section class="for-content-ptop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="contacts__info-block base-text">
                            <div class="info-block__header">Адрес:</div>
                            <div class="info-block__desc"><?=$contacts->uraddress?></div>
                        </div>
                    </div>
<!--                     <div class="col-md-3 col-sm-6 col-xs-12" >
                        <div class="contacts__info-block base-text">
                            <div class="info-block__header">Почтовый адрес:</div>
                            <div class="info-block__desc"><?=$contacts->postaddress?></div>
                        </div>
                    </div> -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="contacts__info-block base-text">
                            <div class="info-block__header">Режим работы:</div>
                            <div class="info-block__desc">
                                <?=$contacts->timework?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="contacts__info-block base-text">
                            <div class="info-block__header">Электронная почта:</div>
                            <div class="info-block__desc"><?=$contacts->mail?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="for-content-ptop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts__header header-block-wrp--bmrg">
                            <h2 class="header-block">Сведения об учредителях и собственниках</h2>
                        </div>                       
                    </div>                    
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <?php foreach ($cofounder as $item): ?>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 for-content-mb-v2">
                        <div class="tile-bg-style">
                            <div class="base-text for-content-mb-v2">
                                <?=$item['about'] ?>
                            </div>
                            <div class="contacts__info-block base-text">
                                <div class="info-block__header">Контакты:</div>
                                <div class="info-block__desc">
                                    <?=$item['address'] ?><br/>
                                    Тел./факс: <a href="tel:<?=$item['telephone'] ?>" class="more-link"><?=$item['telephone'] ?></a><br/>
                                    E-mail: <a href="mailto:<?=$item['email'] ?>" class="more-link"><?=$item['email'] ?></a><br/>
                                    Сайт: <a href="http://<?=$item['site'] ?>/" target="_blank" class="more-link"><?=$item['site'] ?></a>
                                </div>
                            </div>    
                        </div>                                              
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>        
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="services-profile__header header-block-wrp--bmrg">
                        <h1 class="header-block header-block--bmrg-under">Как нас найти</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts__map-info">
                        <div class="map-info__map">
                            <div id="map" class="mapshow"></div>
                            <script>
                                var map;
                                function initMap() {
                                    map = new google.maps.Map(document.getElementById('map'), {
                                        center: {
                                            lat: <?=$contacts->map_x?>,
                                            lng: <?=$contacts->map_y?>
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
