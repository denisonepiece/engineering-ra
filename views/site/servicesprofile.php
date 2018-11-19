<?php
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/services.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/slickySlider.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom-elem.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/slickySlider.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/modal.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/slickySlider-init.js',['depends' =>'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$this->title = 'Услуга';
?>
<!-- Модальное окно START -->
<!-- Класс на открытие - modal-visible -->
<div class="modal-container">
    <div class="modal-container__modal-dialog">
        <div class="modal-dialog__modal-header">

            <!-- Кнопка закрытия. Чтобы закрыть верни modal-visible из родителя -->
            <a class="modal-header__close-btn">
                <svg viewBox="0 0 64 64"><g><path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59 c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59 c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0 L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/></g></svg>
            </a>
            <h1 class="header-block">Подать заявку</h1>
        </div>
        <div class="modal-dialog__modal-body">

            <?php $form = ActiveForm::begin([
                'id' => '', /* Идентификатор формы */
                'layout' => 'horizontal',
                'options' => ['class' => 'stock-form'], /* класс формы */
                'fieldConfig' => [ /* классы полей формы */
                    'template' => "<div>{label}\n{input}\n{error}</div>",
                    'horizontalCssClasses' => [
                        'label' => 'input_description',
                        'input' => 'form-input',
                    ],

                ],
            ]); ?>
            <?= $form->field($model, 'name', [
                'template' => '{label}{input}{error}'
            ]) ?>
            <?= $form->field($model, 'email', [
                'template' => '{label}{input}{error}'
            ]) ?>
            <?= $form->field($model, 'tel', [
                'template' => '{label}{input}{error}'
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Подать заявку', ['class' => 'btn one-btn', 'name' => 'contact-button']) ?>
            </div>

            <div class="msg-forForm">
                Нажимая кнопку «Подать заявку», я соглашаюсь с 
                <a href="http://engineering-ra.ru/web/politic.pdf" target="_blank" class="more-link">правилами передачи и обработки персональных данных</a>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
<!-- Модальное окно END -->
<main class="content-container">
    <section class="main__services-profile stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <div class="services-profile__header header-block-wrp--bmrg">
                        <h1 class="header-block header-block--bmrg-under">Услуги</h1>
                        <h2 class="header-block"><?=$services->title?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
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
                                             style="background: url(<?=$item->img?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></div>
                                        <?php
                                    }
                                    ?>
                                </div>

                                <ol class="gallery-nav" style="display: none;">
                                    <?php
                                    foreach ($slider as $item) {
                                    ?>
                                    <li class="is-selected" style="background: url(<?=$item->img?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></li>
                                        <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                        <div class="under-header__right">
                            <div class="right__info">
                                <div class="info__left">
                                    <div class="left__position">
                                        <div class="position__name">Срок подачи заявок:</div>
                                        <div class="position__desc">до <?=$services->deadline?></div>
                                    </div>
                                    <div class="left__position">
                                        <div class="position__name">Статус услуги:</div>
                                        <div class="position__desc"><?=$services->status?></div>
                                    </div>
                                    <div class="left__position">
                                        <div class="position__name">Максимальный размер господдержки:</div>
                                        <div class="position__desc"><?=$services->support?></div>
                                    </div>
                                </div>
                                <div class="info__right">
                                    <?php
                                    if ($services->material) {
                                        ?>
                                        <div class="right__position">
                                            <div class="position__name">Материалы и документация:</div>
                                            <div class="position__desc">
                                                <div class="btn-group">
                                                    <a href="<?=$services->material?>" class="btn decor-link">
                                                        <svg viewBox="0 0 80 80">
                                                            <g>
                                                                <path d="M29.298,63.471l-4.048,4.02c-3.509,3.478-9.216,3.481-12.723,0
                                                            c-1.686-1.673-2.612-3.895-2.612-6.257s0.927-4.585,2.611-6.258l14.9-14.783c3.088-3.062,8.897-7.571,13.131-3.372
                                                            c1.943,1.93,5.081,1.917,7.01-0.025c1.93-1.942,1.918-5.081-0.025-7.009c-7.197-7.142-17.834-5.822-27.098,3.37L5.543,47.941
                                                            C1.968,51.49,0,56.21,0,61.234s1.968,9.743,5.544,13.292C9.223,78.176,14.054,80,18.887,80c4.834,0,9.667-1.824,13.348-5.476
                                                            l4.051-4.021c1.942-1.928,1.953-5.066,0.023-7.009C34.382,61.553,31.241,61.542,29.298,63.471z M74.454,6.044
                                                            c-7.73-7.67-18.538-8.086-25.694-0.986l-5.046,5.009c-1.943,1.929-1.955,5.066-0.025,7.009s5.068,1.954,7.011,0.025l5.044-5.006
                                                            c3.707-3.681,8.561-2.155,11.727,0.986c1.688,1.673,2.615,3.896,2.615,6.258c0,2.363-0.928,4.586-2.613,6.259l-15.897,15.77
                                                            c-7.269,7.212-10.679,3.827-12.134,2.383c-1.943-1.929-5.08-1.917-7.01,0.025s-1.918,5.081,0.025,7.009
                                                            c3.337,3.312,7.146,4.954,11.139,4.954c4.889,0,10.053-2.462,14.963-7.337l15.897-15.77C78.03,29.083,80,24.362,80,19.338
                                                            C80,14.316,78.03,9.595,74.454,6.044z"/>
                                                            </g>
                                                        </svg>
                                                        <span>Формы документов заявки</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="right__footer">
                                <div class="btn-group">
                                    <a id="modal" class="btn one-btn">Подать заявку</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="services-profile__text base-text for-content-ptop">
                        <?=$services->content?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="services-profile__footer">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
