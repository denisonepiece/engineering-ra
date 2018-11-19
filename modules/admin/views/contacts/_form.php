<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uraddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'postaddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'timework')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mail')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'map_x')->textInput() ?>
    <?= $form->field($model, 'map_y')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
