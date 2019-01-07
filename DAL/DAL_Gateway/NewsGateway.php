<?php

namespace DAL_Gateway;

use PDO;

/**
 * DAL_Class NewsGateway
 * @package DAL_Gateway
 */
class NewsGateway {

    private $con;

    public function __construct() {
        global $BASE, $LOGIN, $PWD;
        $this->con = new \DAL\Connection($BASE, $LOGIN, $PWD);
    }

    /**
     * Get the news from the DB in function of the page in param
     *
     * @param int $page
     * @return array
     */
    public function getNews(int $page) : array {
        global $NEWSPERPAGE;
        $query = "SELECT * FROM TNews ORDER BY Date DESC LIMIT :news,$NEWSPERPAGE;";

        $results = $this->con->getResults($query, array(
            ':news' => array($page, PDO::PARAM_INT)
        ));

        return \DAL_Factory\NewsFactory::createNews($results);
    }

    /**
     * Get count of news in the DB
     *
     * @return array
     */
    public function getTotNews() : array {
        $query = "SELECT count(*) FROM TNews;";
        $ret = [];
        $results = $this->con->getResults($query);

        foreach($results as $res) {
            $ret[]= $res[0];
        }

        return $ret;
    }

    /**
     * Add a RSS feed in DB
     *
     * @param \DAL_Class\News $news
     * @return bool
     */
    public function addNews(\DAL_Class\News $news) : bool {
        $query = "INSERT INTO TNews VALUES(:Url, :Website, :Title, :Description, :Date);";
        return $this->con->executeQuery($query, array(
            ':Url' => array($news->getUrl(), PDO::PARAM_STR),
            ':WebsiteN' => array($news->getWebsite(), PDO::PARAM_STR),
            ':Title' => array($news->getTitle(), PDO::PARAM_STR),
            ':Description' => array($news->getDescription(), PDO::PARAM_STR),
            ':Date' => array($news->getDate(), PDO::PARAM_STR),
        ));
    }
}
