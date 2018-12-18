<?php

class User {
    private $username;
    private $password;
    private $name;
    private $surname;
    private $mail;

    public function __construct($username, $password, $name, $surname, $mail) {
        $this->username=$username;
        $this->password=$password;
        $this->name=$name;
        $this->surname=$surname;
        $this->mail=$mail;
    }
}