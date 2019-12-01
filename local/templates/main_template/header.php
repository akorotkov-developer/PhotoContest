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
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top-menu",
        array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "top",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "COMPONENT_TEMPLATE" => "top-menu"
        ),
        false
    );?>
</header>

<div class="panel">
    <?=$APPLICATION->ShowPanel();?>
</div>