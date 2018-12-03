<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Star */

$this->title = 'Update Star: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="star-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
