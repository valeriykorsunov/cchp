<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta property="og:title" content="<?$APPLICATION->ShowTitle()?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/i/cchp.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?$APPLICATION->ShowTitle()?> — ЦКБ УДП РФ</title>
    <link href="/js/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <? $APPLICATION->ShowHead(); ?>
    <link href="/js/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/js/vendor/simplebar/simplebar.css" rel="stylesheet">
    <link href="/js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="page">
        <header class="header js-header">
            <div class="header__container container">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img src="/i/logo.png" alt="Центральная клиничекская больница" class="header__logo-img" width="81" height="54">
                        <div class="header__title">Центральная Клиническая Больница с поликлиникой</div>
                    </a>
                    <div class="header__subtitle">Управление делами Президента Российской Федерации</div>
                </div>
                <div class="header__right">
                    <div class="header__contacts js-header-phones">
                        <div class="header__contacts-container container">
                            <div class="phone">
                                <i class="phone__icon ficon ficon_phone"></i>
                                <a href="tel:+74955300111" class="phone__number">+7 (495) 530 01 11</a>
                                <span class="phone__note">Контактный центр</span>
                            </div>
                            <div class="phone">
                                <i class="phone__icon ficon ficon_phone"></i>
                                <a href="tel:+74954150905" class="phone__number">+7 (495) 530 00 88</a>
                                <span class="phone__note">Скорая помощь</span>
                            </div>
                            <div class="phone hidden-lg-up">
                                <i class="phone__icon ficon ficon_phone"></i>
                                <a href="tel:+74954226561" class="phone__number">+7 (499) 140 13 18</a>
                                <span class="phone__note">Приёмное отделение</span>
                            </div>
                            <div class="phone hidden-lg-up">
                                <i class="phone__icon ficon ficon_phone"></i>
                                <a href="tel:+74954226561" class="phone__number">+7 (495) 530 09 45</a>
                                <span class="phone__note">Лабораторная диагностика</span>
                            </div>
                            <div class="button_wrapper hidden-lg-up">
                                <a href="#appointment-form" class="button button_primary button_fullwidth js-make-appointment-toggle">Обратный звонок</a>
                            </div>
                        </div>
                    </div>
                    <div class="header__award">
                        <a href="/informatsiya/orden/" class="header__award-text">Орден трудового красного знамени</a>
                        <a href="/informatsiya/orden/">
                            <img src="/i/medal.png" alt="Орден трудового красного знамени" class="header__award-img" width="56" height="68">
                        </a>
                    </div>
                    <div class="header__mobile-nav hidden-lg-up">
                        <a href="/kontakty/bolnitsa/" class="header__mobile-button ficon_marker" title="Контакты"></a>
                        <a href="#" class="header__mobile-button ficon_phone-active js-phones-toggle" title="Телефоны"></a>
                        <a href="#" class="header__mobile-button ficon_menu js-nav-toggle" title="Меню"></a>
                    </div>
                </div>
            </div>
            <nav class="nav js-nav">
                <div class="container">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "main_multilevel", Array(
                        "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                            "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                            "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                            "MAX_LEVEL" => "3", // Уровень вложенности меню
                            "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                            "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "DELAY" => "N", // Откладывать выполнение шаблона меню
                            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        ),
                        false
                    );?>
                </div>
            </nav>
        </header><!-- /.header -->

        <main class="content">
            <?if ($_SERVER["SCRIPT_NAME"] != "/index.php"): ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-3 hidden-md-down">
                            <div class="aside-nav">
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", Array(
                                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                                        "ROOT_MENU_TYPE" => "aside",  // Тип меню для первого уровня
                                        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                                        "MAX_LEVEL" => "2", // Уровень вложенности меню
                                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-9">
                            <div class="breadcrumbs">
                                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
                                    "PATH" => "",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                                        "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                                        "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                                    ),
                                    false
                                );?>
                            </div>
                            <article class="article">
            <?// elseif(strpos($APPLICATION->GetCurDir(),  '/bolnitsa/otdeleniya/') !== false): ?>
            <? elseif(strpos($APPLICATION->GetCurDir(),  '/kontakty/') !== false): ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-9">
                            <div class="breadcrumbs">
                                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
                                    "PATH" => "",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                                        "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                                        "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                                    ),
                                    false
                                );?>
                            </div>
                            <article class="article">
            <? endif ?>