<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="main-nav">
        <div class="centerBlock">
            <ul class="main-nav-list">
                <?foreach($arResult as $arItem){ ?>
                    <li class="main-nav-list__element"><a class="main-nav-list__element__link" href="<?=$arItem["LINK"]?>" title="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></a></li>
                <?}?>
            </ul>
        </div>
    </nav>
    <div class="navigationMobile">
        <input id="hamburger" class="hamburger" type="checkbox">
        <label class="hamburger" for="hamburger">
            <i></i>
            <text>
                <close>закрыть</close>
                <open>открыть</open>
            </text>
        </label>
        <section class="drawer-list">
            <ul class="">
                <?foreach($arResult as $arItem){ ?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?}?>
            </ul>
        </section>
    </div>
<?endif?>