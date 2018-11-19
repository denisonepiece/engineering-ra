<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slidermain */

$this->title = 'Обновить слайд: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Slidermains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="slidermain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'img' => $img,
    ]) ?>

</div>
