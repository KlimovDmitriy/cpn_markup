<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <div class="footer-menu d-flex flex-column">
        <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <a class="mb-2" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
        <? endforeach ?>
    </div>
<? endif ?>