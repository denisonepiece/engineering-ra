<?php
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom-elem.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/directory.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/company-filter.js',['depends' =>'app\assets\ApppAsset']);


$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);

$this->title = 'Справочник компаний';
?>
<main class="content-container">
    <section class="main__directory stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="services-profile__header">
                        <h1 class="header-block header-block--bmrg">Справочник компаний</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="filter-publ-block base-text">
                        <div class="filter-publ-block__left rule-padd-lr rule-padd-tb-mini">
                            <div class="left__description-block">
                                Тип:
                            </div>
                            <div class="left__function-block">
                                <?php
                                foreach ($type as $value) {
                                    ?>
                                    <div>
                                        <input id="radio-<?=$value->id?>" class="radio-custom" name="radio-group" type="radio" value="<?=$value->id?>"
                                               <?php
                                               if ($value->id==Yii::$app->request->get('id_type')){
                                               ?>checked <?php }  ?>>
                                        <label for="radio-<?=$value->id?>" class="radio-custom-label"><?=$value->name?></label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="filter-publ-block__right rule-padd-lr rule-padd-tb-mini">
                            <div class="right__description-block">
                                Деятельность:
                            </div>
                            <div class="right__function-block">
                                <div>
                                    <select class="custom-select">
                                        <option disabled selected>Выбрать</option>
                                        <?php
                                        foreach ($activity as $value) {
                                            ?>
                                            <option value="<?=$value->id?>" <?php
                                            if ($value->id==Yii::$app->request->get('id_activity')){
                                            ?>selected<?php }  ?>><?=$value->name?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="directory__tabe base-text for-content-ptop">
                        <div class="table__row--header">
                            <div class="row__name">Организация</div>
                            <div class="row__working">Деятельность</div>
                            <div class="row__cont">Контакты</div>
                        </div>
                        <?php
                        foreach ($company as $item) {
                            ?>
                            <div class="table__row">
                                <div class="row__name"><?=$item->name?></div>
                                <div class="row__working">
                                    <?php

                                    foreach ($activity as $value) {
                                        if(in_array($value->id, json_decode($item->activity, true))) {
                                            ?>
                                            <div><?= $value->name ?></div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="row__cont">
                                    <?=$item->contact?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="display: none">
            <div class="row">
                <div class="col-md-12">
                    <div class="directory__footer">
                        <div class="pag-page">
                            <div class="pag-page__number">
                                <ul>
                                    <li><a href="#" class="number-link pag-page__number--active">1</a></li>
                                    <li><a href="#" class="number-link">2</a></li>
                                    <li><a href="#" class="number-link">3</a></li>
                                    <li class="number-empty"></li>
                                    <li><a href="#" class="number-link">9</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn pag-btn">
                                    <svg viewBox="0 0 477.175 477.175">
                                        <g>
                                            <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#" class="btn pag-btn">
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
        </div>
    </section>
</main>
