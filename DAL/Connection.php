<?php
/**
 * Created by PhpStorm.
 * User: lobellec
 * Date: 22/11/18
 * Time: 10:15
 */

class Connection extends PDO {
    private $stmt;

    public function __construct($dsn, $username, $password) {
        parent::__construct($dsn, $username, $password);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function executeQuery($query, array $parameters = []) {
        $this->stmt = parent::prepare($query);
        foreach($parameters as $key => $value) {
            $this->stmt->bindValue($key, $value[0], $value[1]);
        }
        return $this->stmt->execute();
    }

    public function getResults($query, array $parameters = []) : Array {
        $this->executeQuery($query, $parameters);
        return $this->stmt->fetchAll();
    }
}