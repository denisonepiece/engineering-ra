<?php

$this->registerCssFile('@web/css/flexboxgrid.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/main.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom-elem.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/news.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/news-filter.js', ['depends' => 'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/notification.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/notification.js', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/menu.js', ['depends' => 'app\assets\ApppAsset']);

// Календарь
$this->registerJsFile('@web/js/jquery.calendario.js', ['depends' => 'app\assets\ApppAsset']);
$this->registerJsFile('@web/js/modernizr.custom.63321.js', ['depends' => 'app\assets\ApppAsset']);

$this->registerCssFile('@web/css/calendar.css', ['depends' => 'app\assets\ApppAsset']);
$this->registerCssFile('@web/css/custom_2.css', ['depends' => 'app\assets\ApppAsset']);


$this->title = 'Новости и события';
?>

<!-- Модальное окно календаря -->
<div class="modal_div" id="modal5">
    <div class="modal-container__modal-dialog">
        <div class="modal-dialog__modal-header">
            <a class="modal_close">
                <svg viewBox="0 0 64 64">
                    <g>
                        <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59 c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59 c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0 L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                    </g>
                </svg>
            </a>
            <h1 class="header-block">Календарь мероприятий</h1>
        </div>
        <div class="modal-dialog__modal-body">


            <!--Календарь-->
            <script>
                //отметки на календаре
                var codropsEvents = {
                    <?php $count = 0; ?>
                    <?php foreach ($news as $item): ?>


                    <?php  $content[$item[date_ivent]] .= '<a href="'. \yii\helpers\Url::to(['/site/newsfull/', 'id' => $item->id]).'">'.$item->title.'</a>'; ?>
                    <?php $date = explode('.', $item[date_ivent]); ?>


                    <?php if((date('m') <= $date[1]) && (date('d') <= $date[0]) && (date('Y') <= $date[2]) ): ?>
                    <?php $count += 1;  ?>
                    '<?= $date[1] . '-' . $date[0] . '-' . $date[2] ?>': '<?= $content[$item[date_ivent]] ?>',
                    <?php endif; ?>
                    <?php endforeach; ?>
                };
            </script>
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
            <!-- /Календарь -->
        </div>

    </div>
</div>
<div id="overlay"></div>
<!-- /Модальное окно календаря -->

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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="filter-publ-block base-text">
                        <div class="filter-publ-block__left rule-padd-lr rule-padd-tb-mini">

                            <div class="left__function-block">
                                <div>
                                    <input id="radio-1" class="radio-custom" name="radio-group" type="radio" <?php
                                    if (Yii::$app->request->get('type') == 2 || !Yii::$app->request->get('type')){
                                    ?>checked <?php } ?> value="2">
                                    <label for="radio-1" class="radio-custom-label">Все</label>
                                </div>
                                <div>
                                    <input id="radio-2" class="radio-custom" name="radio-group" type="radio" <?php
                                    if (Yii::$app->request->get('type') == 0){
                                    ?>checked <?php } ?> value="0">
                                    <label for="radio-2" class="radio-custom-label">Новости</label>
                                </div>
                                <div>
                                    <input id="radio-3" class="radio-custom" name="radio-group" type="radio" <?php
                                    if (Yii::$app->request->get('type') == 1){
                                    ?>checked <?php } ?> value="1">
                                    <label for="radio-3" class="radio-custom-label">События</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter-publ-block__right rule-padd-lr rule-padd-tb-mini">
                            <div class="right__description-block">
                                <a href="#modal5" class="more-link v2 togIndicator open_modal">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <g>
                                            <g>
                                                <path d="M29.334,3H25V1c0-0.553-0.447-1-1-1s-1,0.447-1,1v2h-6V1c0-0.553-0.448-1-1-1s-1,0.447-1,1v2H9V1c0-0.553-0.448-1-1-1S7,0.447,7,1v2H2.667C1.194,3,0,4.193,0,5.666v23.667C0,30.806,1.194,32,2.667,32h26.667C30.807,32,32,30.806,32,29.333V5.666C32,4.193,30.807,3,29.334,3z M30,29.333C30,29.701,29.701,30,29.334,30H2.667C2.299,30,2,29.701,2,29.333V5.666C2,5.299,2.299,5,2.667,5H7v2c0,0.553,0.448,1,1,1s1-0.447,1-1V5h6v2c0,0.553,0.448,1,1,1s1-0.447,1-1V5h6v2c0,0.553,0.447,1,1,1s1-0.447,1-1V5h4.334C29.701,5,30,5.299,30,5.666V29.333z"/>
                                                <rect x="7" y="12" width="4" height="3"/>
                                                <rect x="7" y="17" width="4" height="3"/>
                                                <rect x="7" y="22" width="4" height="3"/>
                                                <rect x="14" y="22" width="4" height="3"/>
                                                <rect x="14" y="17" width="4" height="3"/>
                                                <rect x="14" y="12" width="4" height="3"/>
                                                <rect x="21" y="22" width="4" height="3"/>
                                                <rect x="21" y="17" width="4" height="3"/>
                                                <rect x="21" y="12" width="4" height="3"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Календарь мероприятий</span>
                                    <div class="indicator"><?= $count ?></div>
                                </a>
                            </div>
                            <div class="right__function-block" style="display: none;">
                                <div>
                                    <span>от</span>
                                    <select class="custom-select">
                                        <?php
                                        foreach ($date as $item) {
                                            ?>
                                            <option name="to" <?php
                                            if ($item == Yii::$app->request->get('date_to')){
                                            ?>selected<?php } ?>><?= $item ?></option>
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
                                            if ($item == Yii::$app->request->get('date_do')){
                                            ?>selected<?php } ?>><?= $item ?></option>
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
                                        if ($item->event == 0) {
                                            echo "Новость";
                                        } else {
                                            echo "Событие";
                                        }
                                        ?></div>
                                    <h3 class="header-block"><?= mb_substr(strip_tags($item->title), 0, 70) . '...' ?></h3>
                                </div>
                                <div class="news-block__anons base-text">
                                    <?= mb_substr(strip_tags($item->content), 0, 100) . '...' ?>
                                </div>
                                <div class="news-block__footer">
                                    <a href="<?= \yii\helpers\Url::to(['/site/newsfull/', 'id' => $item->id]) ?>"
                                       class="more-link">Подробнее</a>
                                    <span class="footer__news-date"><?= date("d.m.Y", strtotime($item->date)) ?></span>
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
    $(function () {

        var transEndEventNames = {
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'msTransition': 'MSTransitionEnd',
                'transition': 'transitionend'
            },
            transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
            $wrapper = $('#custom-inner'),
            $calendar = $('#calendar'),
            cal = $calendar.calendario({
                onDayClick: function ($el, $contentEl, dateProperties) {

                    if ($contentEl.length > 0) {
                        showEvents($contentEl, dateProperties);
                    }

                },
                caldata: codropsEvents,
                displayWeekAbbr: true
            }),
            $month = $('#custom-month').html(cal.getMonthName()),
            $year = $('#custom-year').html(cal.getYear());

        $('#custom-next').on('click', function () {
            cal.gotoNextMonth(updateMonthYear);
        });
        $('#custom-prev').on('click', function () {
            cal.gotoPreviousMonth(updateMonthYear);
        });

        function updateMonthYear() {
            $month.html(cal.getMonthName());
            $year.html(cal.getYear());
        }

        // just an example..
        function showEvents($contentEl, dateProperties) {

            hideEvents();

            var $events = $('<div id="custom-content-reveal" class="custom-content-reveal"><h4>События на ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>'),
                $close = $('<span class="custom-content-close"></span>').on('click', hideEvents);

            $events.append($contentEl.html(), $close).insertAfter($wrapper);

            setTimeout(function () {
                $events.css('top', '0%');
            }, 25);

        }

        function hideEvents() {

            var $events = $('#custom-content-reveal');
            if ($events.length > 0) {

                $events.css('top', '100%');
                Modernizr.csstransitions ? $events.on(transEndEventName, function () {
                    $(this).remove();
                }) : $events.remove();

            }

        }

    });
</script>
