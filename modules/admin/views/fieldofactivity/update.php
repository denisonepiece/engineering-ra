<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FieldOfActivity */

$this->title = 'Обновить сферу деятельности: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Field Of Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="field-of-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
