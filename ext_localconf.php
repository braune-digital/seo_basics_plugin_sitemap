<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['seo_basics']['sitemap']['additionalUrlsHook'][] =
    'EXT:seo_basics_plugin_template/Classes/Hooks/Sitemap.php:&BrauneDigital\SeoBasicsPluginSitemap\Hooks\Sitemap->setAdditionalUrls';


?>