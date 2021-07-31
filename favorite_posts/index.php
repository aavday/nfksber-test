<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранные записи");
?>
<?$APPLICATION->IncludeComponent("blog:blog.favorites","",Array(
		"COMPONENT_TEMPLATE" => ".default",
		"POSTS_IBLOCK_ID" => "4",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "0"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>