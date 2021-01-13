<footer class="container my-5">
    <div class="row">
        <div class="col-lg-3 col-sm-12 info col-md-3">
            <img title="Logo" src="<?=SITE_TEMPLATE_PATH?>/markup/img/logo.png" class="w-100">
            <p class="mb-2"><b><i class="fas fa-map-marker-alt"></i> Большая Конюшенная, д 29</b></p>
            <p class="mb-2 text-red"><i class="fa fa-phone" aria-hidden="true"></i> 8 (812) 912-13-63</p>
            <p class="mb-2"><b><i class="fa fa-envelope" aria-hidden="true"></i> cpn.spn@mail.ru</b></p>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3">
            <p><b>Услуги</b></p>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "bottom1",
                    "USE_EXT" => "Y"
                ),
                false,
                Array(
                    'HIDE_ICONS' => 'Y'
                )
            ); ?>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3">
            <p><b>Каталог недвижимости</b></p>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "bottom2",
                    "USE_EXT" => "Y"
                ),
                false,
                Array(
                    'HIDE_ICONS' => 'Y'
                )
            ); ?>
            <p><b>Информация</b></p>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "bottom3",
                    "USE_EXT" => "Y"
                ),
                false,
                Array(
                    'HIDE_ICONS' => 'Y'
                )
            ); ?>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3">
            <p><b>Компания</b></p>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "bottom4",
                    "USE_EXT" => "Y"
                ),
                false,
                Array(
                    'HIDE_ICONS' => 'Y'
                )
            ); ?>
        </div>
    </div>
    <div class="row mt-5">
        <div class="footer-menu col-12">© 2020. Центр Продажи Недвижимости. Все права защищены || <a>Вход для сотрудников</a>
        </div>
    </div>
</footer>
</body>
</html>