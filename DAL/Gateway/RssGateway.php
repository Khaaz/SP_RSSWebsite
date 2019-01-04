<?php

/**
 * Class RssGateway
 */
class RssGateway {

    private $con;

    public function __construct() {
        global $BASE, $LOGIN, $PWD;
        $this->con = new Connection($BASE, $LOGIN, $PWD);
    }

    /**
     * Add a RSS feed in DB
     *
     * @param Rss $rss
     * @return bool
     */
    public function addRSS(Rss $rss) : bool {
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
    public function removeRss(string $RssUrl) : bool {
        $query = "DELETE FROM TRss WHERE RssUrl=:RssUrl;";
        return $this->con->executeQuery($query, array(
            ':RssUrl' => array($RssUrl, PDO::PARAM_STR),
        ));
    }
}