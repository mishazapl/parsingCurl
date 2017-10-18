<?php

class Parse
{

    /**
     * @param $tic
     * @return String
     *
     * Парсинг яндекс тиц.
     */

    public static function yandexTic($tic)
    {
        $yandexTic =  pq($tic)->text();
        return $yandexTic;
    }

    public static function yandexTicDesc($desk)
    {
        $yandexTicDesk = pq($desk)->text();
        return $yandexTicDesk;
    }

    /**
     * @param $rank
     * @return String
     *
     * Парсинг яндекс ранк
     */

    public static function yandexRank($rank)
    {
        $yandexRank =  pq($rank)->text();
        return $yandexRank;
    }

    public static function yandexRankDesc($desk)
    {
        $yandexTicRank = pq($desk)->text();
        return $yandexTicRank;
    }

    /**
     * @param $rank
     * @return String
     *
     * Страниц в яндексе и гугле
     */

    public static function yandexPage($rank)
    {
        $yandexRank =  pq($rank)->text();
        return $yandexRank;
    }

    public static function yandexPageDesc($desk)
    {
        $yandexTicRank = pq($desk)->text();
        return $yandexTicRank;
    }


    /**
     * @param $rank
     * @return String
     *
     * Система аналитики
     */

    public static function systemAnalyse($rank)
    {
        $systemAnalyse =  pq($rank)->text();
        return $systemAnalyse;
    }

    public static function systemAnalyseDesk($desk)
    {
        $systemAnalyseDesk = pq($desk)->text();
        return $systemAnalyseDesk;
    }

    /**
     * @param $rank
     * @return String
     *
     * Inner Link
     */

    public static function innerLink($rank)
    {
        $systemAnalyse =  pq($rank)->text();
        return $systemAnalyse;
    }

    public static function innerLinkDesk($desk)
    {
        $systemAnalyseDesk = pq($desk)->text();
        return $systemAnalyseDesk;
    }

    /**
     * HTML
     */

    public static function innerLinkDeskHTML($desk)
    {
        $systemAnalyseDesk = pq($desk)->html();
        return $systemAnalyseDesk;
    }

    public static function innerLinkHTML($rank)
    {
        $systemAnalyse =  pq($rank)->html();
        return $systemAnalyse;
    }




}