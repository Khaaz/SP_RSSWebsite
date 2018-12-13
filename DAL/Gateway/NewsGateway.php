<?php
/**
 * Created by PhpStorm.
 * User: khaaz
 * Date: 12/4/18
 * Time: 11:26 PM
 */

class NewsGateway {

    private $con;

    public function __construct() {
        global $BASE, $LOGIN, $PWD;
        $this->con = new Connection($BASE, $LOGIN, $PWD);
    }

    public function getNews(int $page) : Array {
        global $NEWSPERPAGE;
        $query = "SELECT * FROM TNews ORDER BY Date DESC LIMIT :news,$NEWSPERPAGE;";
        $allNews = [];

        $results = $this->con->getResults($query, array(
            ':news' => array($page, PDO::PARAM_INT)
        ));

        foreach($results as $res){
            $N = new News($res["Url"], $res["Title"], $res["Website"], $res["Date"]);
            $allNews[] = $N;
        }

        return $allNews;
    }
    public function getTotNews() : Array {
        $query = "SELECT count(*) FROM TNews;";
        $ret = [];
        $results = $this->con->getResults($query);

        foreach($results as $res) {
            $ret[]= $res[0];
        }

        return $ret;
    }


}