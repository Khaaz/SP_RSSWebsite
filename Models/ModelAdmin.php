<?php

/**
 * Class ModelAdmin
 */
class ModelAdmin implements IActor {

    /**
     * If the login exists, create a session
     *
     * @param string $login
     * @param string $pwd
     * @return Admin || null
     */
    public static function connection(string $login, string $pwd) {
        $gw = new AdminGateway();
        $admin = $gw->getIfAdmin($login, $pwd);

        if ($admin) {
            $_SESSION['role'] = 'admin';
            $_SESSION['login'] = $login;
        }

        return $admin;
    }

    /**
     * Disconnect the user, destroy the session
     */
    public static function disconnection() {
        session_unset();
        session_destroy();
        $_SESSION = array();
    }

    /**
     * Whether the user is an admin or not.
     * @return Admin || NULL
     */
    public static function isActor() {
        if (isset($_SESSION['role'])
            && $_SESSION['role'] == 'admin'
            && isset($_SESSION['login'])) {

            // clean params

            $gw = new AdminGateway();
            $a = $gw->getAdmin($_SESSION['login']);

            return sizeof($a) > 0 ? $a[0] : null;
        }

        return null;
    }

    public static function addRSS() {

    }
}