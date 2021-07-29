<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="wrapper-blog">
    <div class="cols-blog">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div class="col-blog" ontouchstart="this.classList.toggle('hover');">
                <a class="container-blog" href="<?=$arItem['DETAIL_PAGE_URL']?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                    <div class="front" style="background-image: url('<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>')">
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
            </div>
        <?endforeach?>
    </div>
</div>
<?endif?>