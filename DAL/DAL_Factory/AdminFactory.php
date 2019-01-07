<?php
namespace DAL_Factory;

/**
 * DAL_Class AdminFactory
 * @package DAL_Factory
 */
class AdminFactory {

    /**
     * Create one Admin from DB data
     *
     * @param $data
     * @return \DAL_Class\Admin
     */
    public static function createOneAdmin($data) : \DAL_Class\Admin {
        return new \DAL_Class\Admin(
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