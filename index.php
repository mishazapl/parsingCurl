<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
<form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="text" name="link" placeholder="Ссылка на сайт">
    <input type="submit" name="submit">
</form>

</body>
</html>

<?php

require_once 'vendor/autoload.php';

// ---------------------------------------------------------------------
// --[ Main code ]------------------------------------------------------
// ---------------------------------------------------------------------

require_once 'Parse.php';


if (isset($_POST['submit']) && $_POST['link']) {

    if (parse_url($_POST['link'], PHP_URL_HOST) === null) {
        $link = $_POST['link'];
    } else {
        $link = parse_url($_POST['link'], PHP_URL_HOST);
    }

        $ch = curl_init("https://a.pr-cy.ru/$link/");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, false);

        $html = curl_exec($ch);

        curl_close($ch);

        phpQuery::newDocument($html);


        /**
         * Яндекс тиц.
         */
        $yandexTic = Parse::yandexTic('#yandexCitation .check-test');
        $yandexTicDesk = Parse::yandexTicDesc('#yandexCitationDescription');

        print '<br><br>' . $yandexTic;
        print '<br>';
        print $yandexTicDesk . '<br><br><br>';

        unset($yandexTic, $yandexTicDesk);

    /**
     * Ссылается страниц.
     */

    $yandexRank = Parse::yandexRank('#solomonoDataHrefs .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#solomonoDataHrefs .content-test');

    print $yandexRank . ' ';

    print $yandexRankDesk;

    print '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);


    /**
     * Мобильность
     */

    $yandexRank = Parse::innerLinkHTML('.box-content #pageSpeedSizeContentToViewport');

    print $yandexRank;

    print '<br><br>';

    $yandexRank = Parse::innerLinkHTML('.box-content #screenshotSmartphone');

    print $yandexRank;

    print '<br><br>';

    unset($yandexRank);

    /**
     * Тег viewport
     */

    $yandexRank = Parse::innerLinkHTML('#pageSpeedConfigureViewport .info-test');

    print $yandexRank;

    print '<br><br>';

    $yandexRank = Parse::innerLinkHTML('#pageSpeedConfigureViewport .content-test');

    print $yandexRank;

    print '<br><br><br>';

    unset($yandexRank);

    /**
     * размер элементов
     */

    $yandexRank = Parse::innerLinkHTML('#pageSpeedSizeTapTargetsAppropriately .info-test');

    print $yandexRank;

    print '<br><br>';

    $yandexRank = Parse::innerLinkHTML('#pageSpeedSizeTapTargetsAppropriately .content-test');

    print $yandexRank;

    print '<br><br><br>';

    unset($yandexRank);

    /**
     * размер шрифтов
     */

    $yandexRank = Parse::innerLinkHTML('#pageSpeedUseLegibleFontSizes .info-test');

    print $yandexRank;

    print '<br><br>';

    $yandexRank = Parse::innerLinkHTML('#pageSpeedUseLegibleFontSizes .content-test');

    print $yandexRank;

    print '<br><br><br>';

    unset($yandexRank);

    /**
     * плагины
     */

    $yandexRank = Parse::innerLinkHTML('#pageSpeedAvoidPlugins .info-test');

    print $yandexRank;

    print '<br><br>';

    $yandexRank = Parse::innerLinkHTML('#pageSpeedAvoidPlugins .content-test');

    print $yandexRank;

    print '<br><br><br>';

    unset($yandexRank);


    /**
     * всплывающие окна
     */

    $yandexRank = Parse::innerLinkHTML('#pageSpeedAvoidInterstitials .info-test');

    print $yandexRank;

    print '<br><br>';

    $yandexRank = Parse::innerLinkHTML('#pageSpeedAvoidInterstitials .content-test');

    print $yandexRank;

    print '<br><br><br>';

    unset($yandexRank);

    /**
     * Технологии
     */

    $yandexRank = Parse::innerLinkHTML('#mainPageTechs');

    print $yandexRank;

    print '<br><br><br>';

    unset($yandexRank);

    /**
     * Ссылается доменов.
     */

    $yandexRank = Parse::yandexRank('#solomonoDataDonors .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#solomonoDataDonors .content-test');

    print $yandexRank . ' ';

    print $yandexRankDesk;

    print '<br><br>';

    unset($yandexRank, $yandexRankDesk);


    /**
     * Общая соц.активность
     */

    $yandexRankDesk = Parse::innerLinkDeskHTML('#socialCounters .content-test');

    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);


    /**
     * Фейсбук
     */

    $yandexRank = Parse::yandexRank('#facebookSocial .info-test');
    $yandexRankDesk = Parse::innerLinkDesk('#facebookSocial .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Вконтакте
     */

    $yandexRank = Parse::yandexRank('#vkontakteSocial .info-test');
    $yandexRankDesk = Parse::innerLinkDesk('#vkontakteSocial .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);


    /**
     * Google +
     */

    $yandexRank = Parse::yandexRank('#googlePlusSocial .info-test');
    $yandexRankDesk = Parse::innerLinkDesk('#googlePlusSocial .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Twitter
     */

    $yandexRank = Parse::yandexRank('#twitterSocial .info-test');
    $yandexRankDesk = Parse::innerLinkDesk('#twitterSocial .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Страниц в яндексе и гугл.
     */

    $systemPage = Parse::yandexPage('#yandexIndex .info-test');
    $systemPageDesk = Parse::yandexPageDesc('#yandexIndex .content-test a');

    print 'Страниц в ' . $systemPage . '  ';
    print $systemPageDesk;

    $systemPageDesk = Parse::yandexPageDesc('#yandexIndex .content-test .red');
    print '<span style="color: red">' . $systemPageDesk . '</span><br><br>';

    /**
     * Гугл
     */

    $systemPage = Parse::yandexPage('#googleIndex .info-test');
    $systemPageDesk = Parse::yandexPageDesc('#googleIndex .content-test a');

    print 'Страниц в ' . $systemPage . '  ';
    print $systemPageDesk;

    $systemPageDesk = Parse::yandexPageDesc('#googleIndex .content-test .red');
    print '<span style="color: red">' . $systemPageDesk . '</span><br><br>';

    unset($systemPage, $systemPageDesk);

        /**
         * Яндекс ранк
         */

        $yandexRank = Parse::yandexRank('#yandexRank .check-test');
        $yandexRankDesk = Parse::yandexRankDesc('#yandexRankDescription');

        print $yandexRank;
        print '<br>';
        print $yandexRankDesk . '<br><br><br>';

        unset($yandexRank, $yandexRankDesk);


        /**
         * Система аналитики
         */

        $systemAnalyse = Parse::systemAnalyse('#statisticsSystems .info-test');
        $systemAnalyseDesk = Parse::systemAnalyseDesk('#statisticsSystems .text-img span');

        print $systemAnalyse . '  ';

        if ($systemAnalyseDesk == '') {
            print '<span style="color: red">У вас нету системы статистики</span>';
        } else {
            print $systemAnalyseDesk . '<br><br><br>';
        }

        unset($systemAnalyse, $systemAnalyseDesk);

        /**
         * Внутренние ссылки.
         */

    $innerLink = Parse::innerLink('#mainPageInternalLinks .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageInternalLinks .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageInternalLinksDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Внешние ссылки.
     */


    $innerLink = Parse::innerLink('#mainPageExternalLinks .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageExternalLinks .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageInternalLinksDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Разметка Shema org
     */

    $innerLink = Parse::innerLink('#microdataSchemaOrg .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#microdataSchemaOrg .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#microdataSchemaOrgDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Разметка Open Graph
     */

    $innerLink = Parse::innerLink('#microdataOpenGraph .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#microdataOpenGraph .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#microdataOpenGraphDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Редиректы
     */

    $innerLink = Parse::innerLink('#wwwRedirect .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#wwwRedirect .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#wwwRedirectDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Robots txt
     */

    $innerLink = Parse::innerLink('#robotsTxt .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#robotsTxt .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#robotsTxtDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);


    /**
     * SiteMap txt
     */

    $innerLink = Parse::innerLink('#sitemap .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#sitemap .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#sitemapDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Favicon
     */

    $innerLink = Parse::innerLink('#favicon .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#favicon .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#faviconDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Page 404
     */

    $innerLink = Parse::innerLink('#page404StatusCode .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#page404StatusCode .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#page404StatusCodeDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * 404 блок два
     */

    $innerLink = Parse::innerLink('#page404BackLink .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#page404BackLink .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#page404StatusCodeDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Скорость загрузки
     */

    /**
     * Кэш браузера
     */

    $yandexRank = Parse::yandexRank('#pageSpeedLeverageBrowserCaching .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedLeverageBrowserCaching .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);


    /**
     * Время ответа
     */

    $yandexRank = Parse::yandexRank('#pageSpeedServerResponseTime .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedServerResponseTime .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Сжатие Gzip
     */

    $yandexRank = Parse::yandexRank('#pageSpeedEnableGzipCompression .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedEnableGzipCompression .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Сжатие изображений
     */

    $yandexRank = Parse::yandexRank('#pageSpeedOptimizeImages .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedOptimizeImages .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Сократите ресурсы
     */

    $yandexRank = Parse::yandexRank('#pageSpeedMinifyResources .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedMinifyResources .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);


    /**
     * Видимое содержимое
     */

    $yandexRank = Parse::yandexRank('#pageSpeedPrioritizeVisibleContent .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedPrioritizeVisibleContent .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * JS, CSS в верхней части страницы.
     */

    $yandexRank = Parse::yandexRank('#pageSpeedMinimizeRenderBlockingResources .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedMinimizeRenderBlockingResources .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Переодресации.
     */

    $yandexRank = Parse::yandexRank('#pageSpeedAvoidLandingPageRedirects .info-test');
    $yandexRankDesk = Parse::yandexRankDesc('#pageSpeedAvoidLandingPageRedirects .content-test');

    print $yandexRank;
    print '<br>';
    print $yandexRankDesk . '<br><br><br>';

    unset($yandexRank, $yandexRankDesk);

    /**
     * Заголовки страницы.
     */

    $innerLink = Parse::innerLink('#mainPageTitle .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageTitle .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageTitleDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);


    /**
     * Описание страницы.
     */

    $innerLink = Parse::innerLink('#mainPageDescription .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageDescription .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageDescriptionDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Заголовки страницы.
     */

    $innerLink = Parse::innerLink('#mainPageHeaders .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageHeaders .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageHeadersDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Кол-во слов.
     */

    $innerLink = Parse::innerLink('#mainPageWordsCount .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageWordsCount .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageWordsCountDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Длина текста.
     */

    $innerLink = Parse::innerLink('#mainPageTextLength .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageTextLength .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);


    /**
     * Тошнота.
     */

    $innerLink = Parse::innerLink('#mainPageSickness .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageSickness .content-test');

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#mainPageSicknessDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    /**
     * Яндекс каталог.
     */

    $innerLink = Parse::innerLink('#yandexCatalog .info-test');
    $innerLinkDesk = Parse::innerLinkDesk('#yandexCatalog .content-test') . '<br>';

    print '<br><br>' . $innerLink;
    print '<br>';
    print $innerLinkDesk . '<br>';
    $innerLinkDesk = Parse::innerLinkDesk('#yandexCatalogDescription .description');
    print $innerLinkDesk . '<br><br><br>';

    unset($innerLink, $innerLinkDesk);

    }

    phpQuery::unloadDocuments();