<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = 'Обновить контакты';
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <a href="<?= \yii\helpers\Url::to(['/admin/co-founder']) ?>" class="btn btn-success">Соучередители</a>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
