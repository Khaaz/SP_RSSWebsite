<?php
/**
 * Created by PhpStorm.
 * User: khaaz
 * Date: 12/13/18
 * Time: 3:04 PM
 */

class AdminFactory {

    /**
     * Create one Admin from DB data
     *
     * @param $data
     * @return Admin
     */
    public static function createOneAdmin($data) : Admin {
        return new Admin(
            $data["Username"],
            $data["Password"],
            $data["Name"],
            $data["Surname"],
            $data["Mail"],
            false
        );
    }

    /**
     * Create an array of Admin from DB data
     *
     * @param $data
     * @return array
     */
    public static function createAdmins($data) : array {
        $allUsr = [];

        foreach($data as $d){
            $allUsr[] = AdminFactory::createOneAdmin($d);
        }

        return $allUsr;
    }
}