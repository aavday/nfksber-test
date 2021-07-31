<?
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

    CModule::IncludeModule('highloadblock');

    $hlBlockId = 4;
    $hlBlock = Bitrix\Highloadblock\HighloadBlockTable::getById($hlBlockId)->fetch();
    $entity  = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
    $entityDataClass = $entity->getDataClass();

    $fields = array(
        'UF_USER_ID' => $_POST['user-id'],
        'UF_POST_ID' => $_POST['post-id']
    );

    if($_POST['action'] == 'add') $entityDataClass::add($fields);

    if($_POST['action'] == 'remove')
    {
        $rsData = $entityDataClass::getList(array(
            "select" => array("ID"),
            "order" => array("ID" => "ASC"),
            "filter" => array('UF_USER_ID'=>$USER->GetID(), 'UF_POST_ID'=>$_POST['post-id'])
	    ));

        while($arData = $rsData->Fetch())
        {
            foreach($arData as $id)
            {
                $entityDataClass::delete($id);
            }
        }
    }

    CBitrixComponent::clearComponentCache('bitrix:news.detail');

    echo true;
}
?>