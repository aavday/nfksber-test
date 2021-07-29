<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<?$APPLICATION->SetTitle($arResult['NAME']);?>
<div class="blog-detail">
    <div class="blog-detail-img">
        <img src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE']['ID'])?>" alt="img">
    </div>
    <div class="blog-info">
        <span><?=$arResult['PREVIEW_TEXT'] ?></span>
        <span class="blog-post-date"><?=$arResult['ACTIVE_FROM_FORMATTED'] ?></span>
    </div>
    <div class="blog-detail-text">
        <p><?=$arResult['DETAIL_TEXT'] ?></p>
    </div>
</div>
<?endif?>