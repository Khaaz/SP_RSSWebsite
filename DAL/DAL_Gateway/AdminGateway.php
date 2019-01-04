<?php

namespace DAL_Gateway;

use PDO;

/**
 * DAL_Class AdminGateway
 * @package DAL_Gateway
 */
class AdminGateway {

    private $con;

    public function __construct() {
        global $BASE, $LOGIN, $PWD;
        $this->con = new \DAL\Connection($BASE, $LOGIN, $PWD);
    }

    /**
     * Get an Admin with his username
     *
     * @param string $login
     * @return array
     */
    public function getAdmin(string $login) : array {
        $query = "SELECT * FROM TUser WHERE Username=:username;";

        $results = $this->con->getResults($query, array(
            ':username' => array($login, PDO::PARAM_STR),
        ));
        return \DAL_Factory\AdminFactory::createAdmins($results);
    }

    /**
     * Check if login and password matches a user in the database
     * Returns the Admin
     *
     * @param string $login
     * @param string $pwd
     * @return \DAL_Class\Admin | null
     */
    public function getIfAdmin(string $login, string $pwd) {
        $query = "SELECT * FROM TUser WHERE Username=:username;";

        $results = $this->con->getResults($query, array(
            ':username' => array($login, PDO::PARAM_STR),
        ));

        if (sizeof($results) > 0 && password_verify($pwd, $results[0]['Password'])) {
            return (\DAL_Factory\AdminFactory::createAdmins($results))[0];
        }

        return null;
    }

    /**
     * Add an Admin in DB
     *
     * @param \DAL_Class\Admin $admin
     * @return bool
     */
    public function addAdmin(\DAL_Class\Admin $admin) : bool {
        $query = "INSERT INTO TUser VALUES(:Username, :Password, :Name, :Surname, :Mail);";
        return $this->con->executeQuery($query, array(
            ':Username' => array($admin->getUsername(), PDO::PARAM_STR),
            ':Password' => array($admin->getPassword(), PDO::PARAM_STR),
            ':Name' => array($admin->getName(), PDO::PARAM_STR),
            ':Surname' => array($admin->getSurname(), PDO::PARAM_STR),
            ':Mail' => array($admin->getMail(), PDO::PARAM_STR),
        ));
    }

    /**
     * Remove an Admin from DB
     * 
     * @param string $login
     * @return bool
     */
    public function removeAdmin(string $login) : bool {
        $query = "DELETE FROM TUser WHERE Username=:Username;";
        return $this->con->executeQuery($query, array(
            ':Username' => array($login, PDO::PARAM_STR),
        ));
    }
}