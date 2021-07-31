<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):
    CModule::IncludeModule('highloadblock');
    global $USER;
    
    $hlBlockId = 4;
    $hlBlock = Bitrix\Highloadblock\HighloadBlockTable::getById($hlBlockId)->fetch();
    $entity  = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
    $entityDataClass = $entity->getDataClass();
    
    $rsData = $entityDataClass::getList(array(
        "select" => array("UF_POST_ID"),
        "order" => array("ID" => "ASC"),
        "filter" => array('UF_USER_ID'=>$USER->GetID(), 'UF_POST_ID'=>$arResult['ID'])
    ));
    
    // проверяем, есть ли у данного пользователя данная запись в избранном

    $arData = $rsData->Fetch();
    if($arData)
    {
        $arResult['IS_IN_FAVORITES'] = true;
    } else
    {
        $arResult['IS_IN_FAVORITES'] = false;
    }

    $arResult["ACTIVE_FROM_FORMATTED"] = strtolower(FormatDate("d F Y", MakeTimeStamp($arResult['ACTIVE_FROM'])));
endif?>