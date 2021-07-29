<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):
    $arResult["ACTIVE_FROM_FORMATTED"] = strtolower(FormatDate("d F Y", MakeTimeStamp($arResult['ACTIVE_FROM'])));
endif?>