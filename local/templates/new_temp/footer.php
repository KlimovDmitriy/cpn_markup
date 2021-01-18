</div>
<footer class="container my-5">
    <div class="row">
        <div class="col-lg-3 col-sm-12 info col-md-3">
            <img title="Logo" src="img/logo.png" class="w-100">
            <p class="mb-2"><b><i class="fas fa-map-marker-alt"></i> Большая Конюшенная, д 29</b></p>
            <p class="mb-2 text-red"><i class="fa fa-phone" aria-hidden="true"></i> 8 (812) 912-13-63</p>
            <p class="mb-2"><b><i class="fa fa-envelope" aria-hidden="true"></i> cpn.spn@mail.ru</b></p>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3">
            <p><b>Услуги</b></p>
            <div class="footer-menu d-flex flex-column">
                <a class="mb-2" href="/uslugi/srochnyy-vykup-nedvizhimosti/">Срочная продажа недвижимости</a>
                <a class="mb-2" href="/uslugi/kvartiry-v-tsentre-goroda/">Квартир в центре города</a>
                <a class="mb-2" href="/uslugi/arenda-kommercheskoy-nedvizhimosti/">Аренда коммерческой недвижимости</a>
                <a class="mb-2" href="/uslugi/prodazha-kommercheskoy-nedvizhimosti/">Продажа коммерческой
                    недвижимости</a>
                <a class="mb-2" href="/uslugi/yuridicheskoe-soprovozhdenie/">Юридическое сопровождение</a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3">
            <p><b>Каталог недвижимости</b></p>
            <div class="footer-menu d-flex flex-column">
                <a class="mb-2" href="/zhilaya/">Жилая недвижимость</a>
                <a class="mb-2" href="/commerce/">Коммерческая недвижимость</a>
                <a class="mb-2" href="/vykup-kvartir/">Выкуп квартир</a>
            </div>
            <p><b>Информация</b></p>
            <div class="footer-menu d-flex flex-column">
                <a class="mb-2" href="/info/">Статьи</a>
                <a class="mb-2" href="/vopros/">Вопрос-ответ</a>
                <a class="mb-2" href="/kontakty/">Контакты</a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3">
            <p><b>Компания</b></p>
            <div class="footer-menu d-flex flex-column">
                <a class="mb-2" href="/about/">О компании</a>
                <a class="mb-2" href="/about/#panel2">Вакансии</a>
                <a class="mb-2" href="/about/#panel3">Отзывы</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="footer-menu col-12">© 2020. Центр Продажи Недвижимости. Все права защищены || <a>Вход для
                сотрудников</a>
        </div>
    </div>
</footer>
<div class="modal fade" id="back-call">
    <? $APPLICATION->IncludeComponent(
        "bitrix:form.result.new", "modal", array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "CHAIN_ITEM_LINK" => "",
        "CHAIN_ITEM_TEXT" => "",
        "EDIT_URL" => "",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "LIST_URL" => "",
        "SEF_MODE" => "N",
        "SUCCESS_URL" => "",
        "USE_EXTENDED_ERRORS" => "Y",
        "VARIABLE_ALIASES" => array("RESULT_ID" => "RESULT_ID", "WEB_FORM_ID" => "WEB_FORM_ID"),
        "WEB_FORM_ID" => "2",
        'AJAX_MODE' => 'Y',
        "AJAX_OPTION_JUMP" => "N",
    ), false
    ); ?>
</div>
<div class="modal fade" id="contacts-form">
    <? $APPLICATION->IncludeComponent(
        "bitrix:form.result.new", "modal", array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "CHAIN_ITEM_LINK" => "",
        "CHAIN_ITEM_TEXT" => "",
        "EDIT_URL" => "",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "LIST_URL" => "",
        "SEF_MODE" => "N",
        "SUCCESS_URL" => "",
        "USE_EXTENDED_ERRORS" => "Y",
        "VARIABLE_ALIASES" => array("RESULT_ID" => "RESULT_ID", "WEB_FORM_ID" => "WEB_FORM_ID"),
        "WEB_FORM_ID" => "3",
        'AJAX_MODE' => 'Y',
        "AJAX_OPTION_JUMP" => "N",
    ), false
    ); ?>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(62117257, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/62117257" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body></html>