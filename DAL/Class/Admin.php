<?php

/**
 * Class Admin
 */
class Admin {
    private $username;
    private $password; // encrypted password
    private $name;
    private $surname;
    private $mail;

    public function __construct(string $username, string $password, string $name, string $surname, string $mail, bool $toHash) {
        $this->username = $username;
        // hash if toHash == true
        $this->password = $toHash ? password_hash($password ,PASSWORD_BCRYPT) : $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }
}