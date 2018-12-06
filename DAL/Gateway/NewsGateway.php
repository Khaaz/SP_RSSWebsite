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
        $query2 = "SELECT FROM TNews ORDER BY DESC LIMIT :news, 10;";
        $query = "SELECT * FROM TNews;";

        return $this->con->getResults($query, array(
            ':news' => array(1, PDO::PARAM_INT)
        ));
    }

}