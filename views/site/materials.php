<?php
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/tabs.js',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);

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
                        <!-- Классы логики табов отрефакторить! -->
                        <?php
                        $i=0;
                        foreach ($doc as $value) {
                            ?>
                            <div class="btn-group tabs__controls-item <?php
                            if ($i==0){
                            ?>tabs__controls-link--active click<?php } ?>">
                                <a href="#" class="btn tab-btn rule-padd-lr-tb tabs__controls-link"><?=$value->title?></a>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                        <!-- Классы логики табов отрефакторить! -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Классы логики табов отрефакторить! -->
                    <div class="tabs__list">
                        <?php
                        $a=1;
                        foreach ($doc as $value) {


                            ?>
                            <div class="tabs__item <?php if($a==1){?>tabs__item--active<?php }?>">
                                <?php
                                foreach ($section as $item) {
                                    $i=0;
                                    foreach ($materials as $mat){
                                        if($mat->id_doc==$value->id && $mat->id_section == $item->id){
                                            $i=1;
                                            break;
                                        }
                                    }
                                    ?>
                                    <div class="item__block rule-padd-tb-mini">
                                        <?php
                                        if ($i==1) {
                                            ?>
                                            <h3 class="header-block header-block--bmrg-under"><?= $item->title ?></h3>
                                            <?php
                                        }
                                        foreach ($materials as $material) {
                                            if ($material->id_doc==$value->id && $material->id_section == $item->id) {
                                                ?>
                                                <div class="btn-group">
                                                    <?php
                                                    if (strpos($material->content,'http')){
                                                    ?>
                                                    <a href="<?=$material->content?>" class="btn decor-link" target="_blank" >
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <a href="<?=$material->content?>" class="btn decor-link" download target="_blank" >
                                                            <?php
                                                            }
                                                        ?>
                                                        <svg viewBox="0 0 80 80">
                                                            <g>
                                                                <path d="M29.298,63.471l-4.048,4.02c-3.509,3.478-9.216,3.481-12.723,0
                                                        c-1.686-1.673-2.612-3.895-2.612-6.257s0.927-4.585,2.611-6.258l14.9-14.783c3.088-3.062,8.897-7.571,13.131-3.372
                                                        c1.943,1.93,5.081,1.917,7.01-0.025c1.93-1.942,1.918-5.081-0.025-7.009c-7.197-7.142-17.834-5.822-27.098,3.37L5.543,47.941
                                                        C1.968,51.49,0,56.21,0,61.234s1.968,9.743,5.544,13.292C9.223,78.176,14.054,80,18.887,80c4.834,0,9.667-1.824,13.348-5.476
                                                        l4.051-4.021c1.942-1.928,1.953-5.066,0.023-7.009C34.382,61.553,31.241,61.542,29.298,63.471z M74.454,6.044
                                                        c-7.73-7.67-18.538-8.086-25.694-0.986l-5.046,5.009c-1.943,1.929-1.955,5.066-0.025,7.009s5.068,1.954,7.011,0.025l5.044-5.006
                                                        c3.707-3.681,8.561-2.155,11.727,0.986c1.688,1.673,2.615,3.896,2.615,6.258c0,2.363-0.928,4.586-2.613,6.259l-15.897,15.77
                                                        c-7.269,7.212-10.679,3.827-12.134,2.383c-1.943-1.929-5.08-1.917-7.01,0.025s-1.918,5.081,0.025,7.009
                                                        c3.337,3.312,7.146,4.954,11.139,4.954c4.889,0,10.053-2.462,14.963-7.337l15.897-15.77C78.03,29.083,80,24.362,80,19.338
                                                        C80,14.316,78.03,9.595,74.454,6.044z"/>
                                                            </g>
                                                        </svg>
                                                        <span><?= $material->title ?></span>
                                                    </a>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>


                            </div>
                            <?php
                            $a++;
                        }
                        ?>




                        <!-- Классы логики табов отрефакторить! -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
