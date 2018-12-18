<?php

/**
 * Class NewsFactory
 */
class NewsFactory {

    /**
     * Create one News from DB data
     *
     * @param $data
     * @return News
     */
    public static function createOneNews($data) : News {
        return new News(
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
            $allUsr[] = NewsFactory::createOneNews($d);
        }

        return $allNews;
    }
}