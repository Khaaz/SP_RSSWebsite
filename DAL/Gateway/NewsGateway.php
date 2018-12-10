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
        $query = "SELECT * FROM TNews LIMIT :news ,10;";
        $allNews=[];

        $results = $this->con->getResults($query, array(
            ':news' => array($page, PDO::PARAM_INT)
        ));

        foreach($results as $res){
            $N=new News($res["url"],$res["titre"],$res["siteprovenance"],$res["date"]);
            $allNews[]=$N;
            }

        return $allNews;
    }

}