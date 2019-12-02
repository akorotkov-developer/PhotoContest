<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$assets = \Bitrix\Main\Page\Asset::getInstance();
?>

<!DOCTYPE html>
<html  lang="<?= LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/favicons.png" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/favicons.png" type="image/png">
    <link rel="icon" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/img/favicons/favicons.png" type="image/png">
    <?
    $assets->addCss("https://use.fontawesome.com/releases/v5.7.2/css/all.css");
    $assets->addCss(SITE_TEMPLATE_PATH. "/styles/main.min.css");
    CJSCore::Init(array("jquery2"));
    ?>
</head>
<body>
<header class="header">
    <nav class="main-nav">
        <div class="centerBlock">
            <ul class="main-nav-list">
                <li class="main-nav-list__element"><a class="main-nav-list__element__link" href="#konkurs" title="Информация о конкурсе">О КОНКУРСЕ</a></li>
                <li class="main-nav-list__element"><a class="main-nav-list__element__link" href="#bonus" title="Победителям">ИТОГИ</a></li>
                <li class="main-nav-list__element"><a class="main-nav-list__element__link" href="#win" title="Победители">Победители</a></li>
                <li class="main-nav-list__element"><a class="main-nav-list__element__link" href="#jury" title="Жюри">Жюри</a></li>
                <li class="main-nav-list__element"><a class="main-nav-list__element__link" href="#feedback" title="СВЯЗАТЬСЯ С ОРГОКОМИТЕТОМ">СВЯЗАТЬСЯ С ОРГОКОМИТЕТОМ</a></li>
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
                <li><a href="#konkurs">О КОНКУРСЕ</a>
                </li>
                <li><a href="#bonus">ИТОГИ</a>
                </li>
                <li><a href="#win">Победители</a>
                </li>
                <li><a href="#jury">Жюри</a>
                </li>
                <li><a href="#feedback">СВЯЗАТЬСЯ С ОРГОКОМИТЕТОМ</a>
                </li>
            </ul>
        </section>
    </div>
</header>

<div class="panel">
    <?=$APPLICATION->ShowPanel();?>
</div>