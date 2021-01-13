<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <div class="col-lg-7 navbar navbar-expand-lg navbar-light d-none d-lg-flex d-md-none order-lg-2 order-md-2 order-2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <? foreach ($arResult['ITEMS'] as $arItem): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="dropdown navbar-light d-lg-none d-md-flex d-sm-none d-flex col-2">
        <button class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="">
            <? foreach ($arResult['ITEMS'] as $arItem): ?>
                <a class="nav-link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
            <? endforeach ?>
        </div>
    </div>
<? endif ?>