<?php
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/contacts.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom-elem.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/news.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/slickySlider.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/slickySlider.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/slickySlider-init.js',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);
$this->title = 'Новости и события';
?>
<main class="content-container">
    <section class="main__news-full stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <div class="news-tile__header header-block-wrp--bmrg">
                        <h1 class="header-block header-block--bmrg-under">Новости и события</h1>
                        <h2 class="header-block"><?=$news->title?></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- <?php
        if($slider[0]->img) {
        ?> -->
        <!-- <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="services__under-header">
                        <div class="under-header__left">
                            <div class="left__slider">
                                <div class="gallery">
                                    <?php
                                    foreach ($slider as $item) {
                                    ?>
                                    <div class="gallery-cell"
                                    style="background: url(<?= $item->img ?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <ol class="gallery-nav" style="display: none;">
                                    <?php
                                    foreach ($slider as $item) {
                                    ?>
                                    <li class="is-selected"
                                    style="background: url(<?= $item->img ?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <!-- Инфо для событий СТАРТ -->
                <?php
                if ($news->event==1) {
                ?>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Мероприятие пройдёт:</div>
                        <div class="position__desc"><?= $news->date_ivent ?></div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Место проведения:</div>
                        <div class="position__desc"><?= $news->point ?></div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Формат мероприятия:</div>
                        <div class="position__desc"><?= $news->format ?></div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Приём заявок:</div>
                        <div class="position__desc"><?= $news->contact ?></div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Поделиться:</div>
                        <div class="position__desc">
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter" data-counter=""></div>
                        </div>
                    </div>
                </div>
                <?php
                }else {
                ?>
                <!-- Инфо для событий КОНЕЦ -->
                <!-- Инфо для новостей СТАРТ -->
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Дата публикации:</div>
                        <div class="position__desc"><?=date("d.m.Y", strtotime($news->date))?></div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="position">
                        <div class="position__name">Поделиться:</div>
                        <div class="position__desc">
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter" data-counter=""></div>
                        </div>
                    </div>
                </div>
                <!-- Инфо для новостей КОНЕЦ -->
                <?php
                }
                ?>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="news-tile__text base-text for-content-mb for-content-ptop-top-v2">
                        <?= $news->content ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="mews-full__footer">
                        <div class="btn-group">
                            <a href="" onclick="history.back();return false;" class="btn pag-btn pag-text">
                                <svg viewBox="0 0 512.001 512.001"><g><g><path d="M384.834,180.699c-0.698,0-348.733,0-348.733,0l73.326-82.187c4.755-5.33,4.289-13.505-1.041-18.26
                                    c-5.328-4.754-13.505-4.29-18.26,1.041l-82.582,92.56c-10.059,11.278-10.058,28.282,0.001,39.557l82.582,92.561
                                    c2.556,2.865,6.097,4.323,9.654,4.323c3.064,0,6.139-1.083,8.606-3.282c5.33-4.755,5.795-12.93,1.041-18.26l-73.326-82.188
                                    c0,0,348.034,0,348.733,0c55.858,0,101.3,45.444,101.3,101.3s-45.443,101.3-101.3,101.3h-61.58
                                    c-7.143,0-12.933,5.791-12.933,12.933c0,7.142,5.79,12.933,12.933,12.933h61.58c70.12,0,127.166-57.046,127.166-127.166
                                    C512,237.745,454.954,180.699,384.834,180.699z"/>
                                </g></g></svg>
                                <span>Назад</span>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="<?=\yii\helpers\Url::to(['/site/newsfull/','id'=>$pre])?>" class="btn pag-btn pag-text">
                                <svg viewBox="0 0 477.175 477.175">
                                    <g>
                                        <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                                    </g>
                                </svg>
                                <span>Предыдущая новость</span>
                            </a>
                            <a href="<?=\yii\helpers\Url::to(['/site/newsfull/','id'=>$next])?>" class="btn pag-btn pag-text">
                                <span>Следующая</span>
                                <svg viewBox="0 0 477.175 477.175">
                                    <g>
                                        <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5   c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__news-more stock-sec-padd top-border-sec">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="news-more">
                        <h2 class="header-block header-block--bmrg">Смотрите также</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                foreach ($news_new as $item) {
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
                }
                ?>
            </div>
        </div>
    </section>
</main>