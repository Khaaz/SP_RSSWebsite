<?php
/**
 * Created by PhpStorm.
 * User: lobellec
 * Date: 22/11/18
 * Time: 10:53
 */

class UserGateway {

    private $con;

    public function __construct() {
        global $BASE, $LOGIN, $PWD;
        $this->con = new Connection($BASE, $LOGIN, $PWD);
    }

    public function findByUsername($username) : Array {
        $query = "SELECT * FROM TUser WHERE Username=:username;";
        $allUsr=[];

        $results = $this->con->getResults($query, array(
            ':username' => array($username, PDO::PARAM_STR)
        ));

        foreach($results as $res){
            $U=new User($res["Username"],$res["Password"],$res["Name"],$res["Surname"],$res["Mail"]);
            $allUsr[]=$U;
        }

        return $allUsr;
    }
}