<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlocks=array();
$db_iblock = CIBlock::GetList(array("SORT"=>"ASC"), array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];

$arComponentParameters = array(
    "GROUPS" => array(),
	"PARAMETERS" => array(
		"POSTS_IBLOCK_ID" => Array(
			"NAME" => 'ID инфоблока с записями блога',
			"PARENT" => "BASE",
			"TYPE" => "LIST",
			"DEFAULT" => "", 
			"VALUES" => $arIBlocks,
			"ADDITIONAL_VALUES" => "N"
		),
		"CACHE_TIME" => Array("DEFAULT"=>"0"),
	)
);
?>