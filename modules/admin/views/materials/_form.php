<?php
$this->registerJsFile('@web/js/tabs.js',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>




    <?= $form->field($model, 'id_doc')->dropDownList($doc) ?>

    <?= $form->field($model, 'id_section')->dropDownList($section) ?>
    <div class="tabs-line for-content-mb">
        <!-- Классы логики табов отрефакторить! -->

            <div class="btn-group tabs__controls-item tabs__controls-link--active click">
                <a href="#" class="btn tab-btn rule-padd-lr-tb tabs__controls-link">файл</a>
            </div>
            <div class="btn-group tabs__controls-item  click">
                <a href="#" class="btn tab-btn rule-padd-lr-tb tabs__controls-link">Ссылка</a>
            </div>

        <!-- Классы логики табов отрефакторить! -->
    </div>
    <div class="tabs__list">
        <div class="tabs__item tabs__item--active">
            <div class="item__block rule-padd-tb-mini">

                <div class="btn-group">
                    <?= $form->field($file, 'img')->fileInput()->label('Файл') ?>
                </div>
            </div>

        </div>
        <div class="tabs__item">
            <div class="item__block rule-padd-tb-mini">
                <div class="btn-group">

                    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
                </div>

            </div>
        </div>
        <!-- Классы логики табов отрефакторить! -->
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
