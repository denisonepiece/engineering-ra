<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

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

    <?php

    echo $form->field($model, 'deadline')->widget(DatePicker::className(),[
        'name' => 'date_ivent',
        'type' => DatePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Дата'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'dd.MM.yyyy',
            'autoclose'=>true,
            'weekStart'=>1, //неделя начинается с понедельника
            'startDate' => '01.01.1901', //самая ранняя возможная дата
            'todayBtn'=>false, //снизу кнопка "сегодня"

        ],

    ]);?>
    <?= $form->field($model, 'status')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'support')->textarea(['rows' => 6]) ?>
    <?= $form->field($img, 'img')->fileInput()->label('Превью') ?>

    <?= $form->field($file, 'img')->fileInput()->label('Материалы и документация') ?>
    <?php
    if(!strpos(Url::to(), 'create')) {
        if ($slider_update) {
            ?>
            <br>
            <h2> Слайдер </h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>картинка</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($slider_update as $item) {
                    ?>
                    <tr>
                        <td><img src="<?= $item->img ?>" style="width: 150px;"></td>
                        <td>
                            <button type="button" class="btn btn-warning delete-slider-services" id="<?= $item->id ?>">Удалить!</button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<h2>Изображения отсутствуют!</h2>";
        }
    }?>
    <?= $form->field($slider, 'img[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
