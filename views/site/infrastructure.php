<?php
$this->registerCssFile('@web/css/flexboxgrid.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/tabs.js', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/notification.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js', ['depends' => 'app\assets\ApppAsset']);

use yii\bootstrap\ActiveForm;
//use yii\widgets\ActiveForm;

$this->title = 'Материалы и публикации';
?>
<!--Начало виджета -->
<div class="modal_div" id="modal7">
    <div class="modal-container__modal-dialog scroll">
        <div class="modal-dialog__modal-header">
            <a class="modal_close">
                <svg viewBox="0 0 64 64">
                    <g>
                        <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59 c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59 c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0 L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                    </g>
                </svg>
            </a>
            <h1 class="header-block">Оцените качество и полноту информации</h1>
        </div>
        <div class="modal-dialog__modal-body">
<!--            <div class="checkbox-custom-v1 for-content-mb-v2">-->
<!---->
<!--            </div>-->
<!--            <div class=" form-group btn-group">-->
<!--                <a href="#" class="btn one-btn">Отправить</a>-->
<!--            </div>-->
            <?php $form = ActiveForm::begin() ?>
                <?= $form->field($model, 'stars')->radioList([
                        '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                ])->label(false) ?>

            <?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn one-btn', 'name' => 'contact-button']) ?>

            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
<!--Конец виджета-->
<main class="content-container">
    <section class="main__materials stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="materials__header">
                        <h1 class="header-block header-block--bmrg-under">Инфраструктура поддержки предпринимательства</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tabs-line for-content-mb">
                        <?php
                        $i = 0;
                        foreach ($infstr as $value) {
                            ?>
                            <div class="btn-group tabs__controls-item <?php
                            if ($i == 0) {
                                ?>tabs__controls-link--active click<?php } ?>">
                                <a href="#"
                                   class="btn tab-btn rule-padd-lr-tb tabs__controls-link"><?= $value->title ?></a>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="tabs__list">
                        <?php foreach ($infstr as $item): ?>
                            <div class="tabs__item tabs__item--active">
                                <div class="item__block base-text">
                                    <?= $item->content ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<a href="#modal7" class="services-wiget v2 open_modal">Оцените качество информации</a>
