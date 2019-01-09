<?php

namespace Models;

/**
 * Default model: does not implement IActor
 *
 * DAL_Class Model
 * @package Models
 */
class Model {
    /**
     * Get the news to show regarding the page passed in param
     *
     * @param int $page - page number
     * @return array
     */
    public static function getNews(int $page) : array {
        $gw = new \DAL_Gateway\NewsGateway();
        return $gw->getNews($page);
    }

    /**
     * Get the number of news in the DB
     *
     * @return int
     */
    public static function getTotalNews(): int {
        $gw = new \DAL_Gateway\NewsGateway();
        return $gw->getTotNews()[0];
    }

    /**
     * Get the 5 most clicked news to show
     *
     * @return array
     */
    public static function getTrendings(): array {
        $gw = new \DAL_Gateway\NewsGateway();
        return $gw->getTrendings();
    }

    public static function addClick(string $url) :bool {
        $gw = new \DAL_Gateway\NewsGateway();
        return $gw->addClick($url);
    }
}