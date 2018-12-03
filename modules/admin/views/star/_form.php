<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Star */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="star-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stars')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
