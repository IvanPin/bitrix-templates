<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <!doctype html>
    <html>
    <head>
        <?
        $APPLICATION->ShowHead();
        use Bitrix\Main\Page\Asset;
        // CSS
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.css');
        // JS
        CJSCore::Init(array("jquery"));
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins//fancybox/source/jquery.fancybox.pack.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
        //STRING
        Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
        Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
        Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
        Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
        ?>
        <title><?$APPLICATION->ShowTitle()?></title>
    </head>
    <body>
<?$APPLICATION->ShowPanel();?>