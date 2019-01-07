<?php

namespace DAL_Factory;

/**
 * DAL_Class RssFactory
 * @package DAL_Factory
 */
class RssFactory {

    /**
     * Create one Rss from DB data
     *
     * @param $data
     * @return \DAL_Class\Rss
     */
    public static function createOneRss($data) : \DAL_Class\Rss {
        return new \DAL_Class\Rss(
            $data["RssUrl"],
            $data["WebsiteName"],
            $data["SiteUrl"]
        );
    }

    /**
     * Create an array of Rss from DB data
     *
     * @param $data
     * @return array
     */
    public static function createRss($data) : array {
        $allRss = [];

        foreach($data as $d){
            $allRss[] = RssFactory::createOneRss($d);
        }

        return $allRss;
    }
}