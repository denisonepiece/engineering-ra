<?php

use yii\widgets\LinkPager;

$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom-elem.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/news.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/news-filter.js',['depends' =>'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/notification.css',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\ApppAsset']);

// Календарь
$this->registerJsFile('@web/js/jquery.calendario.js',['depends' =>'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/modernizr.custom.63321.js',['depends' =>'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/calendar.css',['depends' =>'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom_2.css',['depends' =>'app\assets\ApppAsset']);


$this->title = 'Новости и события';
?>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
<main class="content-container">
    <section class="main__news-tile stock-sec-padd first-sec-top-padd">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="news-tile__header">
                        <h1 class="header-block header-block--bmrg">Новости и события</h1>
                    </div>
                </div>
            </div>
        </div>

        <script>
            //отметки на календаре
            var codropsEvents = {
            <?php foreach ($news as $item): ?>

                '<?= date('m-d-Y' , strtotime($item->date)); ?>' : '<?= $item->title ?>',

            <?php endforeach; ?>
            };
        </script>
        <div class="container">
            <div class="custom-calendar-wrap">
                <div id="custom-inner" class="custom-inner">
                    <div class="custom-header clearfix">
                        <nav>
                            <span id="custom-prev" class="custom-prev"></span>
                            <span id="custom-next" class="custom-next"></span>
                        </nav>
                        <h2 id="custom-month" class="custom-month"></h2>
                        <h3 id="custom-year" class="custom-year"></h3>
                    </div>
                    <div id="calendar" class="fc-calendar-container"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="filter-publ-block base-text">
                        <div class="filter-publ-block__left rule-padd-lr rule-padd-tb-mini">
                            <div class="left__description-block">
                                Показать:
                            </div>
                            <div class="left__function-block">
                                <div>
                                    <input id="radio-1" class="radio-custom" name="radio-group" type="radio" <?php
                                    if (Yii::$app->request->get('type')==2 || !Yii::$app->request->get('type')){
                                    ?>checked <?php } ?> value="2">
                                    <label for="radio-1" class="radio-custom-label">Все</label>
                                </div>
                                <div>
                                    <input id="radio-2" class="radio-custom" name="radio-group" type="radio" <?php
                                    if (Yii::$app->request->get('type')==0){
                                    ?>checked <?php } ?> value="0">
                                    <label for="radio-2" class="radio-custom-label">Новости</label>
                                </div>
                                <div>
                                    <input id="radio-3" class="radio-custom" name="radio-group" type="radio" <?php
                                    if (Yii::$app->request->get('type')==1){
                                    ?>checked <?php } ?> value="1">
                                    <label for="radio-3" class="radio-custom-label">События</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter-publ-block__right rule-padd-lr rule-padd-tb-mini">
                            <div class="right__description-block">
                                Дата публикации:
                            </div>
                            <div class="right__function-block">
                                <div>
                                    <span>от</span>
                                    <select  class="custom-select">
                                        <?php
                                        foreach ($date as $item) {
                                            ?>
                                            <option name="to" <?php
                                            if ($item==Yii::$app->request->get('date_to')){
                                            ?>selected<?php }  ?>><?= $item?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <span>до</span>
                                    <select class="custom-select">
                                        <?php
                                        $date = array_reverse($date, true);
                                        foreach ($date as $item) {
                                            ?>
                                            <option name="do" <?php
                                            if ($item==Yii::$app->request->get('date_do')){
                                            ?>selected<?php }  ?>><?= $item?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="for-content-ptop">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($news as $item) {
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="news-block rule-padd-lr">
                                <div class="news-block__header">
                                    <div class="header__publ-type"><?php
                                        if ($item->event==0){
                                            echo "Новость";
                                        }else{
                                            echo "Событие";
                                        }
                                        ?></div>
                                    <h3 class="header-block"><?= mb_substr(strip_tags($item->title), 0, 70).'...'?></h3>
                                </div>
                                <div class="news-block__anons base-text">
                                    <?= mb_substr(strip_tags($item->content), 0, 100).'...'?>
                                </div>
                                <div class="news-block__footer">
                                    <a href="<?=\yii\helpers\Url::to(['/site/newsfull/','id'=>$item->id])?>" class="more-link">Подробнее</a>
                                    <span class="footer__news-date"><?=date("d.m.Y", strtotime($item->date))?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>

            </div>
        </section>
        <div class="container" style="display: none">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-tile__footer">
                        <div class="pag-page">
                            <div class="pag-page__number">
                                <ul>
                                    <li><a href="#" class="number-link pag-page__number--active">1</a></li>
                                    <li><a href="#" class="number-link">2</a></li>
                                    <li><a href="#" class="number-link">3</a></li>
                                    <li class="number-empty"></li>
                                    <li><a href="#" class="number-link">9</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a href="#" class="btn pag-btn">
                                    <svg viewBox="0 0 477.175 477.175">
                                        <g>
                                            <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#" class="btn pag-btn">
                                    <svg viewBox="0 0 477.175 477.175">
                                        <g>
                                            <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5   c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {

        var transEndEventNames = {
                'WebkitTransition' : 'webkitTransitionEnd',
                'MozTransition' : 'transitionend',
                'OTransition' : 'oTransitionEnd',
                'msTransition' : 'MSTransitionEnd',
                'transition' : 'transitionend'
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            $wrapper = $( '#custom-inner' ),
            $calendar = $( '#calendar' ),
            cal = $calendar.calendario( {
                onDayClick : function( $el, $contentEl, dateProperties ) {

                    if( $contentEl.length > 0 ) {
                        showEvents( $contentEl, dateProperties );
                    }

                },
                caldata : codropsEvents,
                displayWeekAbbr : true
            } ),
            $month = $( '#custom-month' ).html( cal.getMonthName() ),
            $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
            cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
            cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {
            $month.html( cal.getMonthName() );
            $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

            hideEvents();

            var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
                $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

            $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );

            setTimeout( function() {
                $events.css( 'top', '0%' );
            }, 25 );

        }
        function hideEvents() {

            var $events = $( '#custom-content-reveal' );
            if( $events.length > 0 ) {

                $events.css( 'top', '100%' );
                Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

            }

        }

    });
</script>
