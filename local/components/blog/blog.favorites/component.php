<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult = Array();
CModule::IncludeModule('highloadblock');
global $USER;

if ($USER->IsAuthorized())
{
    $arResult['IS_AUTHORIZED'] = true;

	$hlBlockId = 4;
	$hlBlock = Bitrix\Highloadblock\HighloadBlockTable::getById($hlBlockId)->fetch();
	$entity  = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
	$entityDataClass = $entity->getDataClass();
	
	$rsData = $entityDataClass::getList(array(
		"select" => array("UF_POST_ID"),
		"order" => array("ID" => "ASC"),
		"filter" => array('UF_USER_ID'=>$USER->GetID())
	));

	$i = 0; // итератор для индексов в $arResult
	
	while($arData = $rsData->Fetch())
	{
		foreach($arData as $postId)
		{
			$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "DETAIL_PAGE_URL");
			$arFilter = Array("IBLOCK_ID"=>$arParams['POSTS_IBLOCK_ID'], "ACTIVE"=>"Y", "ID"=>$postId);
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

			while($ob = $res->GetNextElement())
			{
				$arResult['ITEMS'][$i] = $ob->GetFields();

                $arButtons = CIBlock::GetPanelButtons(
                    4,
                    $arResult['ITEMS'][$i]["ID"],
                    0,
                    array("SECTION_BUTTONS"=>false, "SESSID"=>false)
                );
                $arResult['ITEMS'][$i]["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
                $arResult['ITEMS'][$i]["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

                $i++;
			}
		}
	}
} else
{
    $arResult['IS_AUTHORIZED'] = false;
}

$this->IncludeComponentTemplate();