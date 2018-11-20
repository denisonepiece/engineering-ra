<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Materials */

$this->title = 'Добавить материал';
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'doc' => $doc,
        'section' => $section,
        'file' => $file,
    ]) ?>

</div>