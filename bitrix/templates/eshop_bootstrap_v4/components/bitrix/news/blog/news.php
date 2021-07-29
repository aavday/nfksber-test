<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->IncludeComponent("bitrix:news.list","",Array(
    "DISPLAY_DATE" => $arParams['DISPLAY_DATE'],
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => $arParams['DISPLAY_PICTURE'],
    "DISPLAY_PREVIEW_TEXT" => $arParams['DISPLAY_PREVIEW_TEXT'],
    "AJAX_MODE" => $arParams['AJAX_MODE'],
    "IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
    "IBLOCK_ID" => $arParams['IBLOCK_ID'],
    "NEWS_COUNT" => $arParams['NEWS_COUNT'],
    "SORT_BY1" => $arParams['SORT_BY1'],
    "SORT_ORDER1" => $arParams['SORT_ORDER1'],
    "SORT_BY2" => $arParams['SORT_BY2'],
    "SORT_ORDER2" => $arParams['SORT_ORDER2'],
    "FILTER_NAME" => $arParams['FILTER_NAME'],
    "FIELD_CODE" => $arParams['LIST_FIELD_CODE'],
    "PROPERTY_CODE" => $arParams['LIST_PROPERTY_CODE'],
    "CHECK_DATES" => $arParams['CHECK_DATES'],
    "DETAIL_URL" => "",
    "PREVIEW_TRUNCATE_LEN" => $arParams['PREVIEW_TRUNCATE_LEN'],
    "ACTIVE_DATE_FORMAT" => $arParams['LIST_ACTIVE_DATE_FORMAT'],
    "SET_TITLE" => $arParams['SET_TITLE'],
    "SET_BROWSER_TITLE" => "Y",
    "SET_META_KEYWORDS" => "Y",
    "SET_META_DESCRIPTION" => "Y",
    "SET_LAST_MODIFIED" => $arParams['SET_LAST_MODIFIED'],
    "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams['INCLUDE_IBLOCK_INTO_CHAIN'],
    "ADD_SECTIONS_CHAIN" => $arParams['ADD_SECTIONS_CHAIN'],
    "HIDE_LINK_WHEN_NO_DETAIL" => $arParams['HIDE_LINK_WHEN_NO_DETAIL'],
    "PARENT_SECTION" => "9",
    "PARENT_SECTION_CODE" => "",
    "INCLUDE_SUBSECTIONS" => "Y",
    "CACHE_TYPE" => $arParams['CACHE_TYPE'],
    "CACHE_TIME" => $arParams['CACHE_TIME'],
    "CACHE_FILTER" => $arParams['CACHE_FILTER'],
    "CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
    "DISPLAY_TOP_PAGER" => $arParams['DISPLAY_TOP_PAGER'],
    "DISPLAY_BOTTOM_PAGER" => $arParams['DISPLAY_BOTTOM_PAGER'],
    "PAGER_TITLE" => $arParams['PAGER_TITLE'],
    "PAGER_SHOW_ALWAYS" => $arParams['PAGER_SHOW_ALWAYS'],
    "PAGER_TEMPLATE" => $arParams['PAGER_TEMPLATER'],
    "PAGER_DESC_NUMBERING" => $arParams['PAGER_DESC_NUMBERING'],
    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams['PAGER_DESC_NUMBERING_CACHE_TIME'],
    "PAGER_SHOW_ALL" => $arParams['PAGER_SHOW_ALL'],
    "PAGER_BASE_LINK_ENABLE" => $arParams['PAGER_BASE_LINK_ENABLE'],
    "SET_STATUS_404" => $arParams['SET_STATUS_404'],
    "SHOW_404" => $arParams['SHOW_404'],
    "MESSAGE_404" => $arParams['MESSAGE_404'],
    "PAGER_BASE_LINK" => $arParams['PAGER_BASE_LINK'],
    "PAGER_PARAMS_NAME" => $arParams['PAGER_PARAMS_NAME'],
    "AJAX_OPTION_JUMP" => $arParams['AJAX_OPTION_JUMP'],
    "AJAX_OPTION_STYLE" => $arParams['AJAX_OPTION_STYLE'],
    "AJAX_OPTION_HISTORY" => $arParams['AJAX_OPTION_HISTORY'],
    "AJAX_OPTION_ADDITIONAL" => ""
    ),
    $component
);?>