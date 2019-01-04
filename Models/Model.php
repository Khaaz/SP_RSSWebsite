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
}