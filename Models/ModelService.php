<?php

namespace Models;

/**
 * Class ModelService
 * @package Models
 */
class ModelService {

    /**
     * Get all RSS from the DB as RSS object
     *
     * @return array
     */
    public static function getRSS() : array {
        $gw = new \DAL_Gateway\RssGateway();

        return $gw->getRSS();
    }

    /**
     * Add a RSS in the DB
     *
     * @param \DAL_Class\News $news
     * @return bool
     */
    public static function addNews(\DAL_Class\News $news) : bool {
        $gw = new \DAL_Gateway\RssGateway();

        return $gw->addNews($news);
    }
}