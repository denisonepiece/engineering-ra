<?php

use yii\helpers\Html;
use app\assets\ApppAsset;

$this->registerJsFile('@web/js/modal.js',['depends' =>'app\assets\ApppAsset']);
ApppAsset::register($this);
$this->registerMetaTag(['name' => 'description', 'content' => 'Государственная поддержка модернизации малого и среднего предпринимательства
в Республике Алтай']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'республика алтай, алтай, горно-алтайск, бизнес-инкубатор, инжиниринг, рци ра, инжиниринговый центр, предпринимательство, бизнес, поддержка, министерство экономического развития,']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="yandex-verification" content="f04eaea37cc5b1be" />
    <meta name="google-site-verification" content="_R7zPyoca7Mvws9P6VgutUaDjzK4LL4Rp5JNCY5-1kk" />
    <link rel="shortcut icon" href="../web/img/favicon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../web/img/favicon/apple-touch-icon-48x48.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../web/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../web/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../web/img/favicon/apple-touch-icon-114x114.png">
    <?php $this->head() ?>
  </head>
  <body>

<!--  Виджет лежит в папке components/views -->
    <?= \app\components\ModalWidget::widget(); ?>
<!--    /Виджет -->

    <?php $this->beginBody() ?>
    <div class="wrapper">
      <header>
        <section class="header__menu-container">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md col-sm col-xs col-no-padding">
                <div class="menu-resp-wrp">
                  <div class="menu-resp">
                    <div class="menu-resp__logo">
                      <a href="<?=\yii\helpers\Url::home()?>">
                        <img src="/web/img/icon/logo.jpg">
                      </a>
                    </div>
                    <div class="menu-resp__btn">
                      <span></span>
                    </div>
                  </div>
                  <div class="main-menu-row">
                    <div class="main-menu">
                      <div class="main-menu__left">
                        <div class="main-logo">
                          <a href="<?=\yii\helpers\Url::home()?>">
                            <img src="/web/img/icon/logo.jpg">
                          </a>
                        </div>
                      </div>
                      <div class="main-menu__right">
                        <div class="right__menu-list">
                          <ul class="test">
                            <li><a href="<?=\yii\helpers\Url::to(['/site/about/'])?>" <?php if(strpos(\yii\helpers\Url::to(),'about')){echo 'class="active"';}?>>О центре</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/site/services/'])?>" <?php if(strpos(\yii\helpers\Url::to(),'services')){echo 'class="active"';}?>>Услуги</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/site/contact/'])?>" <?php if(strpos(\yii\helpers\Url::to(),'contact')){echo 'class="active"';}?>>Контакты</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/site/news/?type=2'])?>" <?php if(strpos(\yii\helpers\Url::to(),'news')){echo 'class="active"';}?>>Новости</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/site/company/?id_type=1&id_activity=1'])?>" <?php if(strpos(\yii\helpers\Url::to(),'company')){echo 'class="active"';}?>>Справочник компаний</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/site/materials/'])?>" <?php if(strpos(\yii\helpers\Url::to(),'materials')){echo 'class="active"';}?>>Материалы и публикации</a></li>
                          </ul>
                        </div>
                        <div class="right__tel" style="display: none;">
                          <span>+7 (38822) 4-72-41</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </header>
      <?= $content ?>
      <?php
      $cookies = Yii::$app->request->cookies;
      if (!$cookies['ok']) {
      ?>
      <div class="notification-bottom fade">
        <div class="notification__msg">
          <div class="msg__body">Пользуясь данным сайтом, вы соглашаетесь с <a href="http://engineering-ra.ru/web/politic.pdf" target="_blank" class="more-link">правилами передачи и обработки персональных данных</a>
        </div>
        <div class="msg__footer">
          <div class="btn-group">
            <a class="btn one-btn notification-click-hidden">Хорошо</a>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
    
    <a href="#modal2" class="services-wiget open_modal">Консультрование и услуги</a>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-no-padding">
            <div class="footer rule-padd-lr-tb">
              <div class="footer-top-wrp">
                <div class="footer__left">
                  <div class="left__logo">
                    <img src="/web/img/icon/logo__footer.png">
                  </div>
                  <div class="left__social">
                    <a href="#" class="social__vk-ico">
                      <svg viewBox="0 0 26.6 15">
                        <path d="M25.5,12.2c-0.8-0.9-1.7-1.8-2.6-2.6c-0.8-0.8-0.8-1.2-0.2-2.1c0.7-1,1.4-1.9,2.2-2.9c0.7-0.9,1.3-1.8,1.7-2.9
                          c0.2-0.7,0-1-0.7-1.1c-0.1,0-0.2,0-0.4,0l-4.2,0c-0.5,0-0.8,0.2-1,0.7C20,1.8,19.7,2.4,19.4,3C18.8,4.4,18,5.7,17,6.8
                          c-0.2,0.2-0.5,0.6-0.9,0.4c-0.5-0.2-0.6-1-0.6-1.2l0-4.9c-0.1-0.7-0.2-1-0.9-1.1l-4.4,0C9.6,0,9.3,0.2,9,0.6C8.8,0.8,8.7,0.9,9.1,1
                          c0.7,0.1,1.1,0.6,1.2,1.3c0.2,1.2,0.2,2.3,0.1,3.5c0,0.3-0.1,0.7-0.2,1c-0.2,0.5-0.6,0.6-1,0.3c-0.4-0.3-0.7-0.7-1-1.1
                          C7.2,4.6,6.3,3,5.7,1.3C5.5,0.8,5.1,0.5,4.6,0.5c-1.3,0-2.5,0-3.8,0c-0.8,0-1,0.4-0.7,1.1C1.5,4.7,3,7.6,5,10.3
                          c1,1.4,2.2,2.6,3.7,3.5c1.7,1,3.6,1.3,5.5,1.2c0.9,0,1.2-0.3,1.2-1.2c0-0.6,0.1-1.2,0.4-1.8c0.3-0.6,0.8-0.7,1.3-0.3
                          c0.3,0.2,0.5,0.4,0.7,0.6c0.5,0.6,1,1.1,1.5,1.7c0.7,0.7,1.5,1.1,2.5,1l3.9,0c0.6,0,0.9-0.8,0.6-1.5C26.2,13,25.8,12.6,25.5,12.2z"
                          />
                        </svg>
                      </a>
                      <a href="#" class="social__odn-ico">
                        <svg viewBox="0 0 14.7 24.5" xmlns="http://www.w3.org/2000/svg">
                          <g>
                            <path d="m6.1 17.2c-1.9-0.2-3.6-0.7-5.1-1.8-0.2-0.1-0.4-0.3-0.5-0.4-0.6-0.6-0.7-1.3-0.2-2 0.4-0.6 1.2-0.8 1.9-0.4 0.1 0.1 0.3 0.2 0.4 0.2 2.7 1.9 6.5 1.9 9.2 0.1 0.3-0.2 0.6-0.4 0.9-0.5 0.7-0.2 1.3 0.1 1.6 0.6 0.4 0.7 0.4 1.3-0.1 1.8-0.8 0.8-1.7 1.3-2.7 1.7s-2 0.6-3 0.7c0.2 0.2 0.2 0.3 0.3 0.4l4.2 4.2c0.5 0.5 0.6 1.1 0.3 1.6-0.3 0.6-0.9 1-1.6 1-0.4 0-0.7-0.2-1-0.5l-3.2-3.2c-0.3-0.3-0.4-0.3-0.7 0l-3.3 3.3c-0.5 0.5-1.1 0.6-1.6 0.3-0.6-0.3-1-0.9-1-1.5 0-0.4 0.2-0.7 0.5-1 1.6-1.4 3-2.8 4.4-4.2 0.1-0.1 0.2-0.2 0.3-0.4z"/>
                            <path d="m7.3 12.4c-3.4 0-6.2-2.8-6.1-6.2 0-3.4 2.8-6.2 6.2-6.2s6.2 2.8 6.2 6.3c-0.1 3.4-2.9 6.1-6.3 6.1zm3.1-6.2c0-1.7-1.3-3-3-3s-3 1.4-3 3.1 1.4 3 3 3c1.6-0.1 3-1.4 3-3.1z"/>
                          </g>
                        </svg>
                      </a>
                      <a href="#" class="social__inst-ico">
                        <svg viewBox="0 0 23.6 23.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                          <path d="m17.1 0h-10.6c-3.6 0-6.5 2.9-6.5 6.5v10.6c0 3.6 2.9 6.5 6.5 6.5h10.6c3.6 0 6.5-2.9 6.5-6.5v-10.6c0-3.6-3-6.5-6.5-6.5zm4.4 17.1c0 2.4-2 4.4-4.4 4.4h-10.6c-2.4 0-4.4-2-4.4-4.4v-10.6c0-2.4 2-4.4 4.4-4.4h10.6c2.4 0 4.4 2 4.4 4.4v10.6z"/>
                          <path d="m11.8 5.7c-3.3 0-6.1 2.7-6.1 6.1 0 3.3 2.7 6.1 6.1 6.1s6.1-2.7 6.1-6.1-2.8-6.1-6.1-6.1zm0 10.1c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/>
                          <path d="m18.1 3.9c-0.4 0-0.8 0.2-1.1 0.4-0.3 0.3-0.5 0.7-0.5 1.1s0.2 0.8 0.5 1.1 0.7 0.5 1.1 0.5 0.8-0.2 1.1-0.4c0.3-0.3 0.4-0.7 0.4-1.1s-0.2-0.8-0.4-1.1c-0.3-0.3-0.7-0.5-1.1-0.5z"/>
                        </svg>
                      </a>
                      <a href="#" class="social__fb-ico">
                        <svg viewBox="0 0 12.9 23.8" xmlns="http://www.w3.org/2000/svg">
                          <path d="m12.4 0h-3.1c-3.5 0-5.7 2.3-5.7 5.9v2.7h-3.1c-0.3 0-0.5 0.2-0.5 0.4v3.9c0 0.3 0.2 0.5 0.5 0.5h3.1v9.9c0 0.3 0.2 0.5 0.5 0.5h4c0.3 0 0.5-0.2 0.5-0.5v-9.9h3.6c0.3 0 0.5-0.2 0.5-0.5v-3.9c0-0.1-0.1-0.3-0.1-0.3-0.1-0.1-0.2-0.1-0.3-0.1h-3.7v-2.3c0-1.1 0.3-1.7 1.7-1.7h2.1c0.3 0 0.5-0.2 0.5-0.5v-3.6c0-0.3-0.3-0.5-0.5-0.5z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="footer__middle">
                    <div class="middle_menu">
                      <ul>
                        <li><a href="<?=\yii\helpers\Url::to(['/site/about/'])?>">О центре</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['/site/services/'])?>">Услуги</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['/site/contact/'])?>">Контакты</a></li>
                      </ul>
                      <ul>
                        <li><a href="<?=\yii\helpers\Url::to(['/site/news/?type=2'])?>">Новости</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['/site/company/?id_type=1&id_activity=1'])?>">Справочник компаний</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['/site/materials/'])?>">Материалы и публикации</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="footer__right">
                    <div class="right__contacts">
                      <span>+7 (38822) 4-72-41</span>
                      <span>ул. Комсомольская 9</span>
                    </div>
                  </div>
                </div>
                <div class="footer-bottom-wrp">
                  <a href="http://hypelab.ru/" class="footer__btm">
                    <svg viewBox="0 0 551.7 99" xmlns="http://www.w3.org/2000/svg">
                      <path class="st0" d="m182.5 94.7v-49.9c0-0.4 0.3-0.8 0.8-0.8h6.6c0.4 0 0.8 0.3 0.8 0.8v18.8c0 0.4 0.3 0.8 0.8 0.8h25.3c0.4 0 0.8-0.3 0.8-0.8v-18.8c0-0.4 0.3-0.8 0.8-0.8h6.6c0.4 0 0.8 0.3 0.8 0.8v49.9c0 0.4-0.3 0.8-0.8 0.8h-6.6c-0.4 0-0.8-0.3-0.8-0.8v-22.2c0-0.4-0.3-0.8-0.8-0.8h-25.3c-0.4 0-0.8 0.3-0.8 0.8v22.2c0 0.4-0.3 0.8-0.8 0.8h-6.6c-0.5 0-0.8-0.4-0.8-0.8z"/>
                      <path class="st0" d="m256.6 94.7v-22.3c0-0.2 0-0.3-0.1-0.4l-18.9-26.8c-0.4-0.5 0-1.2 0.6-1.2h7.6c0.2 0 0.5 0.1 0.6 0.3l13.9 19.6c0.3 0.4 0.9 0.4 1.2 0l13.8-19.5c0.1-0.2 0.4-0.3 0.6-0.3h7.3c0.6 0 1 0.7 0.6 1.2l-18.9 26.5c-0.1 0.1-0.1 0.3-0.1 0.4v22.5c0 0.4-0.3 0.8-0.8 0.8h-6.6c-0.4 0-0.8-0.4-0.8-0.8z"/>
                      <path class="st0" d="m295.9 94.7v-49.9c0-0.4 0.3-0.8 0.8-0.8h21.3c5.4 0 9.6 1.4 12.6 4.2 3.1 2.7 4.6 6.3 4.6 10.7 0 4.5-1.5 8.2-4.6 11-3 2.9-7.2 4.3-12.6 4.3h-13.3c-0.4 0-0.8 0.3-0.8 0.8v19.7c0 0.4-0.3 0.8-0.8 0.8h-6.6c-0.3 0-0.6-0.4-0.6-0.8zm8-28.6c0 0.4 0.3 0.8 0.8 0.8h12.6c6.1 0 9.7-2.8 9.7-7.7s-3.6-7.6-9.7-7.6h-12.6c-0.4 0-0.8 0.3-0.8 0.8v13.7z"/>
                      <path class="st0" d="m348.2 94.7v-49.9c0-0.4 0.3-0.8 0.8-0.8h35c0.4 0 0.8 0.3 0.8 0.8v5.9c0 0.4-0.3 0.8-0.8 0.8h-27c-0.4 0-0.8 0.3-0.8 0.8v11.3c0 0.4 0.3 0.8 0.8 0.8h21.7c0.4 0 0.8 0.3 0.8 0.8v5.9c0 0.4-0.3 0.8-0.8 0.8h-21.7c-0.4 0-0.8 0.3-0.8 0.8v14.8c0 0.4 0.3 0.8 0.8 0.8h28c0.4 0 0.8 0.3 0.8 0.8v5.9c0 0.4-0.3 0.8-0.8 0.8h-36c-0.5-0.3-0.8-0.7-0.8-1.1z"/>
                      <path class="st0" d="m398.9 94.7v-49.9c0-0.4 0.3-0.8 0.8-0.8h6.6c0.4 0 0.8 0.3 0.8 0.8v42.5c0 0.4 0.3 0.8 0.8 0.8h25.8c0.4 0 0.8 0.3 0.8 0.8v5.9c0 0.4-0.3 0.8-0.8 0.8h-34c-0.4-0.1-0.8-0.5-0.8-0.9z"/>
                      <path class="st0" d="m444.2 94.4l21.8-49.9c0.1-0.3 0.4-0.5 0.7-0.5h6.8c0.3 0 0.6 0.2 0.7 0.5l21.8 49.9c0.2 0.5-0.1 1.1-0.7 1.1h-7c-0.3 0-0.6-0.2-0.7-0.5l-5.2-11.9c-0.1-0.3-0.4-0.5-0.7-0.5h-23.4c-0.3 0-0.6 0.2-0.7 0.5l-5.1 11.9c-0.1 0.3-0.4 0.5-0.7 0.5h-6.9c-0.6 0-1-0.6-0.7-1.1zm17.5-18.8h16.5c0.5 0 0.9-0.6 0.7-1.1l-8.3-19c-0.3-0.6-1.1-0.6-1.4 0l-8.3 19c-0.1 0.5 0.3 1.1 0.8 1.1z"/>
                      <path class="st0" d="m506.3 94.7v-49.9c0-0.4 0.3-0.8 0.8-0.8h22.6c9.2 0 15.1 4.7 15.1 12.6 0 4.5-2.1 7.9-5.1 9.7-0.5 0.3-0.4 1.1 0.2 1.3 5.3 1.8 9 6.5 9 13.2 0 4.3-1.5 7.9-4.7 10.5-3.1 2.6-7.3 4-12.6 4h-24.5c-0.4 0.2-0.8-0.2-0.8-0.6zm8.1-30.7c0 0.4 0.3 0.8 0.8 0.8h13.1c5.4 0 8.5-2.4 8.5-6.7s-3.2-6.6-8.5-6.6h-13.1c-0.4 0-0.8 0.3-0.8 0.8v11.7zm0 23.3c0 0.4 0.3 0.8 0.8 0.8h15c6.2 0 10.1-3 10.1-8.2 0-5.1-3.7-7.9-10.1-7.9h-15c-0.4 0-0.8 0.3-0.8 0.8v14.5z"/>
                      <path class="st0" d="m23.9 53.5c-0.4-0.3-0.1-0.8 0.3-0.8 6.8 0.4 38.1 2.2 54.1 9.4 15.5 7 44.2-3.7 53.5-7.5 0.5-0.1 0.8 0.4 0.4 0.8l-42.6 33.9c-0.8 0.7-1.7 0.9-2.6 0.9h-15.4c-0.9 0-2-0.3-2.6-0.9l-45.1-35.8z"/>
                      <path class="st0" d="m149.7 41.7s-4.2 3.3-6 4.7c-0.5 0.4-1.2 0.4-1.7 0l-52.6-41.8c-0.5-0.4-0.3-1.3 0.4-1.3h15.4c1.4 0 2.9 0.5 3.9 1.3l42 32.3c1.6 1.5 0 3.5-1.4 4.8z"/>
                      <path class="st0" d="m156.4 44.3v10.5c0 0.9-0.3 1.8-0.7 2.8-0.4 0.9-1 1.8-2 2.5l-44.6 34.4c-1.2 0.9-2.5 1.3-3.9 1.3h-15.4c-0.7 0-0.9-0.8-0.4-1.3l1.4-1 55.2-43.9 7-5.5 0.5-0.5c1.2-1.2 2.1-2.9 0.8-4.2 0.8 0.7 1.3 1.4 1.7 2.2 0.2 0.9 0.4 1.7 0.4 2.7z"/>
                      <path class="st0" d="m9 57.4s4.2-3.3 6-4.7c0.5-0.4 1.2-0.4 1.7 0l52.6 41.9c0.5 0.4 0.3 1.3-0.4 1.3h-15.3c-1.4 0-2.9-0.5-3.9-1.3l-42-32.6c-1.6-1.4-0.2-3.4 1.3-4.6z"/>
                      <path class="st0" d="m2.3 54.8v-10.5c0-0.9 0.3-1.8 0.7-2.8s1-1.8 2-2.5l44.5-34.3c1.2-0.9 2.5-1.3 3.9-1.3h15.4c0.7 0 0.9 0.8 0.4 1.3l-1.3 0.9-55.1 44-7 5.5-0.5 0.5c-1.2 1.2-2.1 2.9-0.8 4.2-0.8-0.7-1.3-1.4-1.7-2.2-0.4-0.9-0.5-1.9-0.5-2.8z"/>
                      <path class="st0" d="m185.6 27.2h-2.9v-23.6h3 3.1c3.1 0 5.3 0.7 6.7 2.1s2 3.1 2 5.2-0.7 3.8-2.2 5.3c-1.5 1.4-3.6 2.2-6.3 2.2-1.3 0-2.5 0-3.5-0.1v8.9zm3.6-21c-0.9 0-2.1 0-3.6 0.1v9.1c1.3 0.1 2.4 0.2 3.4 0.2 1.7 0 3.1-0.4 4.1-1.3 1-0.8 1.5-2 1.5-3.5 0-1.4-0.4-2.6-1.3-3.4-1-0.8-2.3-1.2-4.1-1.2z"/>
                      <path class="st0" d="m201 27.2l10.1-23.7h2.5l10.1 23.7h-3.1l-3-7.1h-10.7l-3 7.1h-2.9zm11.3-20l-4.3 10.1h8.5l-4.2-10.1z"/>
                      <path class="st0" d="m236.7 27.5c-1.7 0-3.2-0.4-4.6-1.1s-2.4-1.6-3.1-2.6l1.6-1.9c0.7 0.9 1.7 1.6 2.8 2.1s2.2 0.8 3.2 0.8c1.6 0 2.9-0.4 3.9-1.2s1.5-1.9 1.5-3.3c0-1.2-0.4-2.1-1.2-2.8s-1.9-1-3.4-1h-2.7v-2.7h2.5c1 0 1.9-0.4 2.7-1.1 0.8-0.8 1.2-1.7 1.2-2.8 0-1.2-0.4-2.2-1.2-2.8-0.8-0.7-1.8-1-3.1-1-2.1 0-3.9 0.9-5.4 2.6l-1.7-1.9c0.8-1.1 1.9-1.9 3.1-2.5 1.3-0.6 2.7-0.9 4.2-0.9 2.1 0 3.7 0.6 5 1.6 1.2 1.1 1.9 2.6 1.9 4.6 0 1.1-0.3 2.1-0.9 3.1s-1.4 1.8-2.5 2.3c1.4 0.3 2.5 0.9 3.2 1.9s1.1 2.2 1.1 3.6c0 2.1-0.8 3.8-2.3 5.1-1.7 1.3-3.6 1.9-5.8 1.9z"/>
                      <path class="st0" d="m256.8 27.2h-2.8v-23.6h3 3.1c3.1 0 5.3 0.7 6.7 2.1s2 3.1 2 5.2-0.7 3.8-2.2 5.3c-1.5 1.4-3.6 2.2-6.3 2.2-1.3 0-2.5 0-3.5-0.1v8.9zm3.6-21c-0.9 0-2.1 0-3.6 0.1v9.1c1.3 0.1 2.4 0.2 3.4 0.2 1.7 0 3.1-0.4 4.1-1.3 1-0.8 1.5-2 1.5-3.5 0-1.4-0.4-2.6-1.3-3.4s-2.3-1.2-4.1-1.2z"/>
                      <path class="st0" d="m272.3 27.2l10.1-23.7h2.5l10.1 23.7h-3.1l-3-7.1h-10.7l-3 7.1h-2.9zm11.2-20l-4.2 10.1h8.5l-4.3-10.1z"/>
                      <path class="st0" d="m302.4 27.2v-23.6h13.3v2.7h-10.5v6.7c1.2-0.1 2.4-0.2 3.6-0.2 2.6 0 4.6 0.6 6.1 1.9 1.4 1.2 2.2 2.9 2.2 5.1 0 2.4-0.8 4.3-2.4 5.6s-3.8 1.9-6.7 1.9c-0.9 0-1.9 0-3.2-0.1h-2.4zm6.3-11.7c-1 0-2.2 0.1-3.4 0.2v8.7c1.4 0.1 2.5 0.1 3.2 0.1 1.9 0 3.3-0.4 4.3-1.2s1.4-1.9 1.4-3.4c0-1.4-0.5-2.5-1.4-3.2-0.9-0.8-2.3-1.2-4.1-1.2z"/>
                      <path class="st0" d="m324.5 15.4c0-3.4 1.1-6.3 3.4-8.6s5.1-3.5 8.6-3.5 6.3 1.1 8.6 3.4 3.4 5.2 3.4 8.7-1.1 6.4-3.4 8.7-5.2 3.5-8.6 3.5c-3.5 0-6.3-1.1-8.6-3.4-2.2-2.4-3.4-5.3-3.4-8.8zm3.1 0c0 2.7 0.9 4.9 2.6 6.7s3.9 2.7 6.4 2.7c2.6 0 4.8-0.9 6.5-2.7s2.5-4 2.5-6.7-0.9-5-2.6-6.8-3.9-2.7-6.4-2.7c-2.6 0-4.7 0.9-6.4 2.7-1.8 1.8-2.6 4-2.6 6.8z"/>
                      <path class="st0" d="M352.8,6.3V3.6h19.4v2.7H364v20.9h-2.9V6.3H352.8z"/>
                      <path class="st0" d="m374.1 27.2l10.1-23.7h2.5l10.1 23.7h-3.1l-3-7.1h-10.7l-3 7.1h-2.9zm11.3-20l-4.2 10.1h8.5l-4.3-10.1z"/>
                      <path class="st0" d="M420.1,27.2V16.5h-13v10.7h-2.9V3.6h2.9v10.2h13V3.6h2.9v23.6H420.1z"/>
                      <path class="st0" d="m431.5 15.4c0-3.4 1.1-6.3 3.4-8.6s5.1-3.5 8.6-3.5 6.3 1.1 8.6 3.4 3.4 5.2 3.4 8.7-1.1 6.4-3.4 8.7-5.2 3.5-8.6 3.5c-3.5 0-6.3-1.1-8.6-3.4-2.3-2.4-3.4-5.3-3.4-8.8zm3 0c0 2.7 0.9 4.9 2.6 6.7s3.9 2.7 6.4 2.7c2.6 0 4.8-0.9 6.5-2.7s2.5-4 2.5-6.7-0.9-5-2.6-6.8-3.9-2.7-6.4-2.7c-2.6 0-4.7 0.9-6.4 2.7s-2.6 4-2.6 6.8z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- wrapper end -->
    <!---->
    <!--<script src="js/jquery-3.3.1.min.js"></script>-->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABvqNSAslrpLr5Zbp8EJpPE7IwFiPsH7o&callback=initMap"></script>-->
    <!--<script src="js/slider.js"></script>-->
    <?php $this->endBody() ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
    try {
    w.yaCounter49681018 = new Ya.Metrika2({
    id:49681018,
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
    });
    } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/tag.js";
    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/49681018" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
  </body>
</html>
<?php $this->endPage() ?>