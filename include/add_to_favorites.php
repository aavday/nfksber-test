<?
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

$arData = $rsData->Fetch();
if($arData):?>
    <button class="btn btn-danger">Удалить из избранного</button>
    <input type="hidden" name="action" id="action" value="remove">
<?else:?>
    <button class="btn btn-primary">Добавить в избранные</button>
    <input type="hidden" name="action" id="action" value="add">
<?endif;