<?php

use yii\helpers\Html;
$this->registerJsFile('@web/js/slider-delete-img.js',['depends' =>'app\assets\AppAsset']);
/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = 'Обновить новость: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'slider' => $slider,
        'slider_update' => $slider_update,
    ]) ?>

</div>
