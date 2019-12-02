<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$assets = \Bitrix\Main\Page\Asset::getInstance();
?>

<footer class="footer">
    <div class="centerBlock">
        <div class="footer__inner">
            <nav class="footer-logo">
                <ul class="footer-nav-list">
                    <li class="footer-nav-list__element"><a class="logo logo__footer" href="http://www.rushydro.ru" title="На главную РусГидро"></a></li>
                </ul>
            </nav>
            <nav class="footer-nav">
                <ul class="footer-nav-list">
                    <li class="footer-nav-list__element"><a class="footer-nav-list__element__link" href="#konkurs" title="Информация о конкурсе">О конкурсе</a></li>
                    <li class="footer-nav-list__element"><a class="footer-nav-list__element__link" href="#bonus" title="Победителям">Итоги</a></li>
                    <li class="footer-nav-list__element"><a class="footer-nav-list__element__link " href="#bonus" title="Победителям">Победителям</a></li>
                    <li class="footer-nav-list__element"><a class="footer-nav-list__element__link " href="#jury" title="Жюри">Жюри</a></li>
                    <li class="footer-nav-list__element"><a class="footer-nav-list__element__link " href="#feedback" title="СВЯЗАТЬСЯ С ОРГОКОМИТЕТОМ">Связаться С ОРГОКОМИТЕТОМ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>


<script src="<?=SITE_TEMPLATE_PATH?>/js/main.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor.min.js"></script>
<?/*
$assets->addJs(SITE_TEMPLATE_PATH."/js/main.min.js");
$assets->addJs(SITE_TEMPLATE_PATH."/js/vendor.min.js");*/
?>
<!-- Facebook Pixel Code -->

<script>

  !function(f,b,e,v,n,t,s)

  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

  n.callMethod.apply(n,arguments):n.queue.push(arguments)};

  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

  n.queue=[];t=b.createElement(e);t.async=!0;

  t.src=v;s=b.getElementsByTagName(e)[0];

  s.parentNode.insertBefore(t,s)}(window, document,'script',

  'https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '1317102745124137');

  fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=1317102745124137&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?162",t.onload=function(){VK.Retargeting.Init("VK-RTRG-399919-4hz7t"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-399919-4hz7t" style="position:fixed; left:-999px;" alt=""/></noscript>
</body>
</html>