<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!doctype html>
<html lang="ru" class="page">
<head>
<meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/bootstrap.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/minify/rgen_min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/configstyle.css?rgF5v");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/custom.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/style.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/owl.carousel.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/markup/css/owl.theme.default.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/jquery-3.5.1.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "http://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/owl.carousel.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/bootstrap.bundle.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/markup/js/script.js");
     $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/minify/rgen_min.js");
     $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.maskedinput.min.js");
     $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/rgen.js");
     $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/slider/src/css/lightslider.css");
     $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/slider/src/js/lightslider.js");
     ?>
     <!-- Favicons -->
       <link rel="icon" href="/favicon.ico">

       <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
       <!--[if lt IE 9]>
     <script src="js/html5shiv.js"></script>
     <script src="js/respond.min.js"></script>
     <![endif]-->
       <!--[if IE 9 ]><script src="js/ie-matchmedia.js"></script><![endif]-->
       <meta name="yandex-verification" content="95fe9d8f40dd55b9" />
       <meta name="mailru-domain" content="klcH9GxZTY0to3Pb" />
</head>
<body>
<header class="container pb-3 mt-3 header">
    <div class="row align-items-lg-center align-items-center">
        <div class="col-lg-3 col-sm-5 col-9 order-lg-1 order-md-1 order-2">
            <a class="navbar-brand" href="#"><img title="лого" src="<?=SITE_TEMPLATE_PATH?>/markup/img/logo.png" class="w-100"></a>
        </div>
        <div class="col-lg-7 navbar navbar-expand-lg navbar-light d-none d-lg-flex d-md-none order-lg-2 order-md-2 order-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about/">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/uslugi/">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about/#panel3">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontakty/">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/info/">Полезная информация</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dropdown navbar-light d-lg-none d-md-flex d-sm-none d-flex col-2">
            <button class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="">
                <a class="nav-link" href="/">Главная</a>
                <a class="nav-link" href="/about/">О компании</a>
                <a class="nav-link" href="/uslugi/">Услуги</a>
                <a class="nav-link" href="/about/#panel3">Отзывы</a>
                <a class="nav-link" href="/kontakty/">Контакты</a>
                <a class="nav-link" href="/info/">Полезная информация</a>
            </div>
        </div>
        <div class="col-lg-2 col-sm-5 order-lg-3 order-md-3 order-3">
            <div class=""><a href="tel:+78129121363"><b>+7 (812) 912-13-63</b></a></div>
            <a href="#back-call" data-toggle="modal" class="text-white bg-danger px-3 py-1">Обратная связь</a>
        </div>
    </div>
</header>
<div class="content__body">