<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!doctype html>
<html lang="ru" class="page">
<head>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/bootstrap.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/style.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/owl.carousel.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/owl.theme.default.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/jquery-3.5.1.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "http://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/owl.carousel.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/bootstrap.bundle.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/script.js"); ?>
</head>
<body>
<header class="container pb-3 mt-3 header">
    <div class="row align-items-lg-center align-items-center">
        <div class="col-lg-3 col-sm-5 col-9 order-lg-1 order-md-1 order-2">
            <a class="navbar-brand" href="#"><img title="лого" src="<?=SITE_TEMPLATE_PATH?>/markup/img/logo.png" class="w-100"></a>
        </div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "N",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "Y"
            ),
            false,
            Array(
                'HIDE_ICONS' => 'Y'
            )
        ); ?>
        <div class="col-lg-2 col-sm-5 order-lg-3 order-md-3 order-3">
            <div class=""><a href="tel:+78129121363"><b>+7 (812) 912-13-63</b></a></div>
            <div class="text-white bg-danger px-3 py-1">Обратная связь</div>
        </div>
    </div>
</header>