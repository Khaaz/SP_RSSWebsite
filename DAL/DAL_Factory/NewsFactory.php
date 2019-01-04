<?php

namespace DAL_Factory;

/**
 * DAL_Class NewsFactory
 * @package DAL_Factory
 */
class NewsFactory {

    /**
     * Create one News from DB data
     *
     * @param $data
     * @return News
     */
    public static function createOneNews($data) : \DAL_Class\News {
        return new \DAL_Class\News(
            $data["Url"],
            $data["Title"],
            $data["Website"],
            $data["Date"]
        );
    }

    /**
     * Create an array of News from DB data
     *
     * @param $data
     * @return array
     */
    public static function createNews($data) : array {
        $allNews = [];

        foreach($data as $d){
            $allNews[] = NewsFactory::createOneNews($d);
        }

        return $allNews;
    }
}