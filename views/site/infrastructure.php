<?php
$this->registerCssFile('@web/css/flexboxgrid.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/tabs.js', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/notification.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js', ['depends' => 'app\assets\ApppAsset']);

$this->title = 'Материалы и публикации';
?>
<main class="content-container">
    <section class="main__materials stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="materials__header">
                        <h1 class="header-block header-block--bmrg-under">Материалы и публикации</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tabs-line for-content-mb">
                        <?php
                        $i = 0;
                        foreach ($infstr as $value) {
                            ?>
                            <div class="btn-group tabs__controls-item <?php
                            if ($i == 0) {
                                ?>tabs__controls-link--active click<?php } ?>">
                                <a href="#"
                                   class="btn tab-btn rule-padd-lr-tb tabs__controls-link"><?= $value->title ?></a>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tabs__list">
                        <?php foreach ($infstr as $item): ?>
                            <div class="tabs__item tabs__item--active">
                                <div class="item__block rule-padd-tb-mini">
                                    <?= $item->content ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
