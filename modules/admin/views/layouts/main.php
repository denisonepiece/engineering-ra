<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' =>[
            ['label' => 'Оценки', 'url' => ['/admin/star']],
            ['label' => 'Новости', 'url' => ['/admin/news']],
            ['label' => 'Компании', 'url' => ['/admin/company']],
            ['label' => 'Слайдер', 'url' => ['/admin/slidermain']],
            ['label' => 'Услуги', 'url' => ['/admin/services']],
            ['label' => 'Инфраструктура', 'url' => ['/admin/infrastructure']],
            ['label' => 'Материалы', 'url' => ['/admin/materials']],
            ['label' => 'Тек. страницы', 'url' => ['/admin/page']],
            ['label' => 'Команда', 'url' => ['/admin/team']],
            ['label' => 'О центре', 'url' => ['/admin/about/update?id=1']],
            ['label' => 'Контакты', 'url' => ['/admin/contacts/update?id=1']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/admin/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/admin/login/logout'], 'post')
                . Html::submitButton(
                    'Logout',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
