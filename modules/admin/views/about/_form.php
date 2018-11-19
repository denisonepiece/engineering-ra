<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?php
    echo $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 500,
            'options' => array(
                'minHeight' => 300,
                'lang' => Yii::$app->language,
                'imageUpload' => Url::to(['default/image-upload']),
                'formatting' => array('p', 'blockquote', 'pre', 'h2', 'strong'),
            ),

            'imageUpload' => Url::to(['default/image-upload']),
            'validatorOptions' => ['maxSize' => 40000],    //макс. размер файла
            'pastePlainText' => true,
            'buttonSource' => true,

            'plugins' => [
                'video',
                'imagemanager',
                'filemanager',
            ]
        ]
    ]);
    ?>

    <?= $form->field($model, 'titleabout')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contantabout')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
