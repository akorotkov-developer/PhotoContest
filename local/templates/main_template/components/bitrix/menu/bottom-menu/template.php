<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="footer-logo">
        <ul class="footer-nav-list">
            <li class="footer-nav-list__element"><a class="logo logo__footer" href="http://www.rushydro.ru" title="На главную РусГидро"></a></li>
        </ul>
    </nav>
    <nav class="footer-nav">
        <ul class="footer-nav-list">
            <?foreach($arResult as $arItem) {?>
                <li class="footer-nav-list__element">
                    <a class="footer-nav-list__element__link" href="<?=$arItem["LINK"]?>" title="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></a>
                </li>
            <?}?>
        </ul>
    </nav>
<?endif?>

