<?php

/**
 * Default model: does not implement IActor
 *
 * Class Model
 */
class Model {
    /**
     * Get the news to show regarding the page passed in param
     *
     * @param int $page - page number
     * @return array
     */
    static function getNews(int $page) : Array {
        $gw = new NewsGateway();
        return $gw->getNews($page);
    }

    /**
     * Get the number of news in the DB
     *
     * @return int
     */
    static function getTotalNews(): int {
        $gw = new NewsGateway();
        return $gw->getTotNews()[0];
    }
}