<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CoFounder */

$this->title = 'Create Co Founder';
$this->params['breadcrumbs'][] = ['label' => 'Co Founders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="co-founder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
