<?php

//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<!-- Модальное окно из виджета START -->
<div class="modal_div" id="modal2">
    <div class="modal-container__modal-dialog">
        <div class="modal-dialog__modal-header">
            <!-- Кнопка закрытия. Чтобы закрыть верни modal-visible из родителя -->
            <a class="modal_close">
                <svg viewBox="0 0 64 64">
                    <g>
                        <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59 c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59 c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0 L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                    </g>
                </svg>
            </a>
            <h1 class="header-block">Что Вам требуется?</h1>
        </div>
        <div class="modal-dialog__modal-body">
            <div class="btn-group btmM">
                <a href="#modal3" class="btn one-btn open_modal btn-maxW">Проконсультрироваться</a>
            </div>
            <div class="btn-group">
                <a href="#modal4" class="btn one-btn open_modal btn-maxW">Получить услугу</a>
            </div>
        </div>
    </div>
</div>
<div id="overlay"></div>
<!-- Модальное окно END -->
<!-- Модальное окно из виджета КОНСУЛЬТАЦИЯ START -->
<div class="modal_div scroll" id="modal3">
    <div class="modal-container__modal-dialog scroll">
        <div class="modal-dialog__modal-header">
            <!-- Кнопка закрытия. Чтобы закрыть верни modal-visible из родителя -->
            <a class="modal_close">
                <svg viewBox="0 0 64 64">
                    <g>
                        <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59 c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59 c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0 L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                    </g>
                </svg>
            </a>
            <h1 class="header-block">Получение консультации</h1>
        </div>
        <div class="modal-dialog__modal-body">

            <?php $form = ActiveForm::begin([
//                'id' => '', /* Идентификатор формы */
                'layout' => 'horizontal',
                'options' => ['class' => 'stock-form form-horizontal'], /* класс формы */
                'fieldConfig' => [ /* классы полей формы */
                    'template' => "<div class=\"form-group field-contactform-name required\">{label}\n{input}\n{error}<p class=\"help-block help-block-error\"></p></div>",
                    'horizontalCssClasses' => [
                        'label' => 'control-label input_description',
                        'input' => 'form-control',
                    ],

                ],
            ]); ?>
            <?= $form->field($model, 'fio', [
                'template' => '{label}{input}{error}'
            ]) ?>
            <?= $form->field($model, 'contact', [
                'template' => '{label}{input}{error}',
            ])->textInput()->input('contact', ['placeholder' => 'Телефон, e-mail']) ?>
            <?= $form->field($model, 'data', [
                'template' => '{label}{input}{error}'
            ])->textInput()->input('data', ['placeholder' => 'Наименование или ИНН']) ?>

            <?= $form->field($model, 'subject', [
                'template' => '{label}{input}{error}'
            ]) ?>

            <?= $form->field($model, 'text_subject', [
                'template' => '{label}{input}{error}'
            ])->textarea([
                'cols' => '30',
                'rows' => '10',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Подать заявку', ['class' => 'btn one-btn', 'name' => 'contact-button']) ?>
            </div>

            <div class="msg-forForm">
                Нажимая кнопку «Подать заявку», я соглашаюсь с
                <a href="http://engineering-ra.ru/web/politic.pdf" target="_blank" class="more-link">правилами передачи
                    и обработки персональных данных</a>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<div id="overlay"></div>
<!-- Модальное окно END -->
<!-- Модальное окно из виджета УСЛУГА START -->
<div class="modal_div scroll" id="modal4">
    <div class="modal-container__modal-dialog scroll">
        <div class="modal-dialog__modal-header">
            <a class="modal_close">
                <svg viewBox="0 0 64 64">
                    <g>
                        <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59 c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59 c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0 L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                    </g>
                </svg>
            </a>
            <h1 class="header-block">Заявка на услугу</h1>
        </div>
        <div class="modal-dialog__modal-body">
            <?php $form = ActiveForm::begin([
//                'id' => '', /* Идентификатор формы */
                'layout' => 'horizontal',
                'options' => ['class' => 'stock-form form-horizontal'], /* класс формы */
                'fieldConfig' => [ /* классы полей формы */
                    'template' => "<div class=\"form-group field-contactform-name required\">{label}\n{input}\n{error}<p class=\"help-block help-block-error\"></p></div>",
                    'horizontalCssClasses' => [
                        'label' => 'control-label input_description',
                        'input' => 'form-control',
                    ],

                ],
            ]); ?>
            <?= $form->field($service, 'fio', [
                'template' => '{label}{input}{error}'
            ]) ?>
            <?= $form->field($service, 'contact', [
                'template' => '{label}{input}{error}',
            ])->textInput()->input('contact', ['placeholder' => 'Телефон, e-mail']) ?>
            <?= $form->field($service, 'data', [
                'template' => '{label}{input}{error}'
            ])->textInput()->input('data', ['placeholder' => 'Наименование или ИНН']) ?>

            <?= $form->field($service, 'about', [
                'template' => '{label}{input}{error}'
            ])->textarea([
                'cols' => '30',
                'rows' => '10',
                'placeholder' => 'Опишите задачу',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Подать заявку', ['class' => 'btn one-btn', 'name' => 'contact-button']) ?>
            </div>

            <div class="msg-forForm">
                <a href="/web/reglament.pdf" target="_blank" class="more-link">Регламенты оказания услуг РЦИ РА</a>
            </div>

            <div class="msg-forForm">
                Нажимая кнопку «Подать заявку», я соглашаюсь с
                <a href="http://engineering-ra.ru/web/politic.pdf" target="_blank" class="more-link">правилами передачи
                    и обработки персональных данных</a>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<div id="overlay"></div>
<!-- Модальное окно END -->