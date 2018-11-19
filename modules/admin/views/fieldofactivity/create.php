<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FieldOfActivity */

$this->title = 'Добавить сферу деятельности';
$this->params['breadcrumbs'][] = ['label' => 'Field Of Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="field-of-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
