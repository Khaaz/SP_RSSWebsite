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
        $this->con = new Connection();
    }

    public function findByUsername($username) : Array {
        // get user from DB + create new User()
        // and return
    }
}