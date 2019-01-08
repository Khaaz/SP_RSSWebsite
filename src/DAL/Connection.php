<?php

namespace DAL;

use PDO;

/**
 * DAL_Class Connection extends PDO
 * @package DAL
 */
class Connection extends PDO {
    private $stmt;

    public function __construct($dsn, $username, $password) {
        parent::__construct($dsn, $username, $password);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Execute a query that doesn't return any result
     *
     * @param $query - SQL query
     * @param array $parameters
     * @return bool
     */
    public function executeQuery($query, array $parameters = []) : bool {
        $this->stmt = parent::prepare($query);
        foreach($parameters as $key => $value) {
            $this->stmt->bindValue($key, $value[0], $value[1]);
        }
        return $this->stmt->execute();
    }

    /**
     * Execute a query and then returns result (SELECT)*
     *
     * @param $query - SQL query
     * @param array $parameters
     * @return array
     */
    public function getResults($query, array $parameters = []) : array {
        $this->executeQuery($query, $parameters);
        return $this->stmt->fetchAll();
    }
}