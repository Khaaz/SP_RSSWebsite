<?php

namespace DAL_Gateway;

use PDO;

/**
 * DAL_Class RssGateway
 * @package DAL_Gateway
 */
class RssGateway {

    private $con;

    public function __construct() {
        global $BASE, $LOGIN, $PWD;
        $this->con = new \DAL\Connection($BASE, $LOGIN, $PWD);
    }

    /**
     * Add a RSS feed in DB
     *
     * @param \DAL_Class\Rss $rss
     * @return bool
     */
    public function addRSS(\DAL_Class\Rss $rss) : bool {
        $query = "INSERT INTO TRss VALUES(:RssUrl, :WebsiteName, :SiteUrl);";
        return $this->con->executeQuery($query, array(
            ':RssUrl' => array($rss->getRssUrl(), PDO::PARAM_STR),
            ':WebsiteName' => array($rss->getWebsiteName(), PDO::PARAM_STR),
            ':SiteUrl' => array($rss->getSiteUrl(), PDO::PARAM_STR),
        ));
    }

    /**
     * Remove a RSS feed in DB
     * @param string $RssUrl
     * @return bool
     */
    public function delRSS(string $RssUrl) : bool {
        $query = "DELETE FROM TRss WHERE RssUrl=:RssUrl;";
        return $this->con->executeQuery($query, array(
            ':RssUrl' => array($RssUrl, PDO::PARAM_STR),
        ));
    }

    /**
     * Get all RSS in DB
     * @return array
     */
    public function getRSS() : array {
        $query = "SELECT * FROM TRss;";

        $result = $this->con->getResults($query);
        return \DAL_Factory\RssFactory::createRss($result);
    }
}