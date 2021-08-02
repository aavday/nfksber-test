<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
global $USER;
?>
<div class="blog-detail">
    <div class="blog-detail-img">
        <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="img">
    </div>
    <div class="blog-info">
        <span><?=$arResult['PREVIEW_TEXT'] ?></span>
        <span class="blog-post-date"><?=$arResult['DISPLAY_ACTIVE_FROM'] ?></span>
    </div>
    <div class="blog-detail-text">
        <p><?=$arResult['DETAIL_TEXT'] ?></p>
        <?if($USER->IsAuthorized()):?>
            <form method="post" class="add-to-favorite">
                <?if($arResult['IS_IN_FAVORITES']):?>
                    <button class="btn btn-danger">Удалить из избранного</button>
                    <input type="hidden" name="action" class="action" value="remove">
                <?else:?>
                    <button class="btn btn-primary">Добавить в избранные</button>
                    <input type="hidden" name="action" class="action" value="add">
                <?endif;?>
                <input type="hidden" value="<?=$USER->GetID()?>" name="user-id" id="user-id">
                <input type="hidden" value="<?=$arResult['ID']?>" name="post-id" id="post-id">
            </form>
        <?endif?>
    </div>
</div>
<?endif?>