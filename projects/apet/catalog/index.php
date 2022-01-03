<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
$APPLICATION->SetPageProperty("title", "Каталог");
?>

<div class="page page--catalog">
  <div class="container">
    <!-- Add breadcrumb -->
    <? $APPLICATION->IncludeComponent(
      "bitrix:breadcrumb",
      ".default",
      array()
    ); ?>

    <!-- Include settings sorting catalog  -->
    <? include($_SERVER["DOCUMENT_ROOT"] . "/catalog/parts/sorting.php"); ?>

    <!-- Add catalog component /local/template/main/catalog/catalog -->
    <? $APPLICATION->IncludeComponent(
      "bitrix:catalog",
      "catalog",
      array(
        "TEMPLATE_THEME" => "blue",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => CATALOG_ID,
        "HIDE_NOT_AVAILABLE" => "L",
        "BASKET_URL" => "/personal/cart/",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PARTIAL_PRODUCT_PROPERTIES" => "Y",
        "COMMON_SHOW_CLOSE_POPUP" => "N",
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/catalog/",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "USE_MAIN_ELEMENT_SECTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_TITLE" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "USE_ELEMENT_COUNTER" => "Y",
        "USE_SALE_BESTSELLERS" => "Y",
        "COMPARE_POSITION_FIXED" => "Y",
        "COMPARE_POSITION" => "top left",
        "USE_FILTER" => "Y",
        "FILTER_NAME" => "arrFilter",
        "FILTER_FIELD_CODE" => array(
          0 => "ID",
          1 => "",
        ),
        "FILTER_HIDE_ON_MOBILE" => "N",
        "FILTER_PROPERTY_CODE" => array(
          0 => "",
          1 => "BRAND",
          2 => "TASTE",
          3 => "AGE",
          4 => "ANIMAL_CATEGORY",
          5 => "BLOG_COMMENTS_CNT",
          6 => "PRODUCING_COUNTRY",
          7 => "STRANA_PROIZVODSTVA",
          8 => "GLUBINA",
          9 => "LEKARTSVENNAYAFORMA",
          10 => "CML2_ARTICLE",
          11 => "DOZIROVKA",
          12 => "NAZNACHENIE",
          13 => "PRIMENENIE",
          14 => "FASOVKA",
          15 => "SROK_GODNOSTI",
        ),
        "FILTER_PRICE_CODE" => array(
          0 => "Битрикс VetLavka.ru",
        ),
        "FILTER_OFFERS_FIELD_CODE" => array(
          0 => "PREVIEW_PICTURE",
          1 => "DETAIL_PICTURE",
          2 => "",
        ),
        "FILTER_OFFERS_PROPERTY_CODE" => array(
          0 => "",
          1 => "",
        ),
        "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
        "TOP_ADD_TO_BASKET_ACTION" => "ADD",
        "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
        "DETAIL_ADD_TO_BASKET_ACTION" => array(
          0 => "BUY",
        ),
        "DETAIL_SHOW_BASIS_PRICE" => "Y",
        "FILTER_VIEW_MODE" => "VERTICAL",
        "USE_REVIEW" => "N",
        "MESSAGES_PER_PAGE" => "10",
        "USE_CAPTCHA" => "Y",
        "REVIEW_AJAX_POST" => "Y",
        "PATH_TO_SMILE" => "",
        "FORUM_ID" => "",
        "URL_TEMPLATES_READ" => "",
        "SHOW_LINK_TO_FORUM" => "Y",
        "POST_FIRST_MESSAGE" => "N",
        "USE_COMPARE" => "Y",
        "PRICE_CODE" => array(
          0 => "Битрикс VetLavka.ru",
        ),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "PRODUCT_PROPERTIES" => "",
        "USE_PRODUCT_QUANTITY" => "Y",
        "CONVERT_CURRENCY" => "Y",
        "CURRENCY_ID" => "RUB",
        "OFFERS_CART_PROPERTIES" => array(
          0 => "COLOR_REF",
          1 => "SIZES_SHOES",
          2 => "SIZES_CLOTHES",
        ),
        "SHOW_TOP_ELEMENTS" => "N",
        "SECTION_COUNT_ELEMENTS" => "N",
        "SECTION_TOP_DEPTH" => "1",
        "SECTIONS_VIEW_MODE" => "TEXT",
        "SECTIONS_SHOW_PARENT_NAME" => "Y",
        "PAGE_ELEMENT_COUNT" => "15",
        "LINE_ELEMENT_COUNT" => "3",
        "ELEMENT_SORT_FIELD" => $actualSorting["ELEMENT_SORT_FIELD"],
        "ELEMENT_SORT_ORDER" => $actualSorting["ELEMENT_SORT_ORDER"],
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER2" => "desc",
        "LIST_PROPERTY_CODE" => array(
          0 => "NEWPRODUCT",
          1 => "SALELEADER",
          2 => "SPECIALOFFER",
          3 => "",
        ),
        "INCLUDE_SUBSECTIONS" => "Y",
        "LIST_META_KEYWORDS" => "-",
        "LIST_META_DESCRIPTION" => "-",
        "LIST_BROWSER_TITLE" => "-",
        "LIST_OFFERS_FIELD_CODE" => array(
          0 => "NAME",
          1 => "PREVIEW_PICTURE",
          2 => "DETAIL_PICTURE",
          3 => "",
        ),
        "LIST_OFFERS_PROPERTY_CODE" => array(
          0 => "ARTNUMBER",
          1 => "COLOR_REF",
          2 => "SIZES_SHOES",
          3 => "SIZES_CLOTHES",
          4 => "MORE_PHOTO",
          5 => "",
        ),
        "LIST_OFFERS_LIMIT" => "0",
        "SECTION_BACKGROUND_IMAGE" => "-",
        "DETAIL_DETAIL_PICTURE_MODE" => array(),
        "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
        "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
        "DETAIL_PROPERTY_CODE" => array(
          0 => "DOBAVKI",
          1 => "PISHCHEVAYA_TSENNOST",
          2 => "SOSTAV",
          3 => "RAZMER",
          4 => "TSVET",
          5 => "DEYSTVUYUSHCHEE_VESHCHESTVO",
          6 => "KHRANIT_V_KHOLODILNIKE",
          7 => "VOZRAST_ZHIVOTNOGO",
          8 => "TOVARNAYA_KATEGORIYA",
          9 => "VID_NOMENKLATURY",
          10 => "LEKARSTVENNAYA_FORMA",
          11 => "ARTIKUL_POSTAVSHCHIKA",
          12 => "SROK_GODNOSTI",
          13 => "INSTRUKTSIYA",
          14 => "PORYADOK_KHRANENIYA",
          15 => "PORYADOK_PRIMENENIYA",
          16 => "POKAZANIYA_K_PRIMENENIYU",
          17 => "EDINITSA_IZMERENIYA_DOZIROVKI",
          18 => "DOZIROVKA",
          19 => "FARMAKOLOGICHESKAYA_GRUPPA",
          20 => "FASOVKA",
          21 => "PREIMUSHCHESTVA",
          22 => "FIRST_LETTER",
          23 => "BRAND",
          24 => "MARKA",
          27 => "TEG",
          28 => "NAZNACHENIE",
          29 => "STATUS_ZAKUPKI",
          30 => "VSD",
          31 => "OPISANIE_DLYA_INTERNET_MAGAZINA",
          32 => "STRANA_PROIZVODSTVA",
          33 => "CML2_MANUFACTURER",
          34 => "FILES",
          35 => "MORE_PHOTO",
          36 => "CML2_TAXES",
          37 => "CML2_BASE_UNIT",
          38 => "CML2_TRAITS",
          39 => "CML2_ATTRIBUTES",
          40 => "CML2_ARTICLE",
          41 => "CML2_BAR_CODE",
42 => "KIND_ANIMAL",
        ),
        "DETAIL_META_KEYWORDS" => "-",
        "DETAIL_META_DESCRIPTION" => "-",
        "DETAIL_BROWSER_TITLE" => "-",
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
        "SHOW_DEACTIVATED" => "N",
        "DETAIL_OFFERS_FIELD_CODE" => array(
          0 => "NAME",
          1 => "",
        ),
        "DETAIL_OFFERS_PROPERTY_CODE" => array(
          0 => "ARTNUMBER",
          1 => "COLOR_REF",
          2 => "SIZES_SHOES",
          3 => "SIZES_CLOTHES",
          4 => "MORE_PHOTO",
          5 => "",
        ),
        "DETAIL_BACKGROUND_IMAGE" => "-",
        "DETAIL_STRICT_SECTION_CHECK" => "Y",
        "LINK_IBLOCK_TYPE" => "",
        "LINK_IBLOCK_ID" => "",
        "LINK_PROPERTY_SID" => "",
        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
        "USE_ALSO_BUY" => "Y",
        "ALSO_BUY_ELEMENT_COUNT" => "3",
        "ALSO_BUY_MIN_BUYES" => "2",
        "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
        "USE_GIFTS_DETAIL" => "Y",
        "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
        "USE_GIFTS_SECTION" => "Y",
        "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
        "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",
        "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
        "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
        "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",
        "GIFTS_MESS_BTN_BUY" => "Выбрать",
        "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
        "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
        "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
        "GIFTS_SHOW_IMAGE" => "Y",
        "GIFTS_SHOW_NAME" => "Y",
        "GIFTS_SHOW_OLD_PRICE" => "Y",
        "USE_STORE" => "Y",
        "STORES" => array(
          0 => "",
          1 => "1",
          2 => "",
        ),
        "USE_MIN_AMOUNT" => "N",
        "USER_FIELDS" => array(
          0 => "",
          1 => "",
        ),
        "FIELDS" => array(
          0 => "ADDRESS",
          1 => "PHONE",
          2 => "",
        ),
        "SHOW_EMPTY_STORE" => "Y",
        "SHOW_GENERAL_STORE_INFORMATION" => "N",
        "STORE_PATH" => "/store/#store_id#",
        "MAIN_TITLE" => "Наличие на складах",
        "USE_BIG_DATA" => "Y",
        "BIG_DATA_RCM_TYPE" => "personal",
        "OFFERS_SORT_FIELD" => "sort",
        "OFFERS_SORT_ORDER" => "asc",
        "OFFERS_SORT_FIELD2" => "id",
        "OFFERS_SORT_ORDER2" => "desc",
        "PAGER_TEMPLATE" => "arrows",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Товары",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "ADD_PICT_PROP" => "-",
        "LABEL_PROP" => array(
          0 => "TEG",
        ),
        "PRODUCT_DISPLAY_MODE" => "Y",
        "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
        "OFFER_TREE_PROPS" => array(
          0 => "COLOR_REF",
          1 => "SIZES_SHOES",
          2 => "SIZES_CLOTHES",
          3 => "",
        ),
        "DETAIL_DISPLAY_NAME" => "Y",
        "SHOW_DISCOUNT_PERCENT" => "Y",
        "SHOW_OLD_PRICE" => "Y",
        "DETAIL_SHOW_MAX_QUANTITY" => "N",
        "MESS_BTN_BUY" => "Купить",
        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
        "MESS_BTN_COMPARE" => "Сравнение",
        "MESS_BTN_DETAIL" => "Подробнее",
        "MESS_NOT_AVAILABLE" => "Нет в наличии",
        "TOP_VIEW_MODE" => "SECTION",
        "DETAIL_USE_VOTE_RATING" => "Y",
        "DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
        "DETAIL_USE_COMMENTS" => "Y",
        "DETAIL_BLOG_USE" => "Y",
        "DETAIL_VK_USE" => "N",
        "DETAIL_FB_USE" => "Y",
        "DETAIL_FB_APP_ID" => "",
        "DETAIL_BRAND_USE" => "N",
        "SIDEBAR_SECTION_SHOW" => "Y",
        "SIDEBAR_DETAIL_SHOW" => "N",
        "SIDEBAR_PATH" => "",
        "COMPONENT_TEMPLATE" => "catalog",
        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
        "LABEL_PROP_MOBILE" => "",
        "LABEL_PROP_POSITION" => "top-right",
        "PRODUCT_SUBSCRIPTION" => "Y",
        "DISCOUNT_PERCENT_POSITION" => "bottom-right",
        "SHOW_MAX_QUANTITY" => "N",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N",
        "INSTANT_RELOAD" => "Y",
        "COMMON_ADD_TO_BASKET_ACTION" => "ADD",
        "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
          0 => "BUY",
        ),
        "SEARCH_PAGE_RESULT_COUNT" => "50",
        "SEARCH_RESTART" => "N",
        "SEARCH_NO_WORD_LOGIC" => "Y",
        "SEARCH_USE_LANGUAGE_GUESS" => "Y",
        "SEARCH_CHECK_DATES" => "Y",
        "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
        "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
        "LIST_ENLARGE_PRODUCT" => "STRICT",
        "LIST_SHOW_SLIDER" => "Y",
        "LIST_SLIDER_INTERVAL" => "3000",
        "LIST_SLIDER_PROGRESS" => "N",
        "DETAIL_BLOG_URL" => "catalog_comments",
        "DETAIL_BLOG_EMAIL_NOTIFY" => "N",
        "DETAIL_IMAGE_RESOLUTION" => "16by9",
        "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
        "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
        "DETAIL_SHOW_SLIDER" => "N",
        "MESS_PRICE_RANGES_TITLE" => "Цены",
        "MESS_DESCRIPTION_TAB" => "Описание",
        "MESS_PROPERTIES_TAB" => "Характеристики",
        "MESS_COMMENTS_TAB" => "Комментарии",
        "DETAIL_SHOW_POPULAR" => "Y",
        "DETAIL_SHOW_VIEWED" => "Y",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "LAZY_LOAD" => "N",
        "LOAD_ON_SCROLL" => "N",
        "COMPATIBLE_MODE" => "Y",
        "FILE_404" => "",
        "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
        "COMPARE_FIELD_CODE" => array(
          0 => "",
          1 => "",
        ),
        "COMPARE_ELEMENT_SORT_FIELD" => "sort",
        "COMPARE_ELEMENT_SORT_ORDER" => "asc",
        "DISPLAY_ELEMENT_SELECT_BOX" => "N",
        "SEF_URL_TEMPLATES" => array(
          "sections" => "",
          "section" => "#SECTION_CODE_PATH#/",
          "element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
          "compare" => "compare/",
          "smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
        )
      ),
      false
    ); ?>
  </div>
  <!-- Подключение блока bullets из parts -->
  <? include($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/parts/all-pages/footer-bullets.php") ?>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>