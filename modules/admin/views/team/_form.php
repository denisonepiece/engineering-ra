<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mail')->textarea(['rows' => 6]) ?>
    <?= $form->field($img, 'img')->fileInput()->label('Изображение') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
