<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):
    if($arResult["IS_AUTHORIZED"]):
        if($arResult['ITEMS']): ?>
            <div class="wrapper-blog">
                <div class="cols-blog">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                        <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
                        <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
                        <div class="col-blog" ontouchstart="this.classList.toggle('hover');">
                            <a class="container-blog" href="<?=$arItem['DETAIL_PAGE_URL']?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                                <div class="front" style="background-image: url('<?=CFile::GetPath($arItem["PREVIEW_PICTURE"])?>')">
                                    <div class="inner">
                                        <p><?=$arItem['NAME'] ?></p>
                                        <span><?=$arItem['PREVIEW_TEXT'] ?></span>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="inner">
                                        <p><?=$arItem['DETAIL_TEXT'] ?></p>
                                    </div>
                                </div>
                            </a>
                            <form method="post" class="add-to-favorite">
                                <button class="btn btn-danger">Удалить из избранного</button>
                                <input type="hidden" name="action" id="action" value="remove">
                                <input type="hidden" value="<?=$USER->GetID()?>" name="user-id" id="user-id">
                                <input type="hidden" value="<?=$arItem['ID']?>" name="post-id" id="post-id">
                            </form>
                        </div>
                    <?endforeach?>
                </div>
            </div>
        <?else:?>
            <p>Избранные записи <a href="/blog/">блога</a> отсутствуют</p>
        <?endif?>
    <?else:?>
        <p>
            <a href="/login/?login=yes">Авторизуйтесь</a>, чтобы использовать функционал отложенных записей
        </p>
    <?endif?>
<?endif?>