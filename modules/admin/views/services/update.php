<?php

use yii\helpers\Html;
$this->registerJsFile('@web/js/slider-delete-img.js',['depends' =>'app\assets\AppAsset']);

/* @var $this yii\web\View */
/* @var $model app\models\Services */

$this->title = 'Обновить услугу: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'img' => $img,
        'slider' => $slider,
        'slider_update' => $slider_update,
        'file' => $file,

    ]) ?>

</div>
