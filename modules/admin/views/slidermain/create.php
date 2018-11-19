<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Slidermain */

$this->title = 'Добавить слайд';
$this->params['breadcrumbs'][] = ['label' => 'Slidermains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slidermain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'img' => $img,
    ]) ?>

</div>
