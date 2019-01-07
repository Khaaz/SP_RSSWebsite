<?php

namespace Models;

/**
 * Class ModelService
 * @package Models
 */
class ModelService {

    /**
     * Add a RSS in the DB
     *
     * @param \DAL_Class\News $news
     * @return bool
     */
    public static function addNews(\DAL_Class\News $news) : bool {
        $gw = new \DAL_Gateway\NewsGateway();

        return $gw->addNews($news);
    }
}