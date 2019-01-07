<?php

namespace Models;

/**
 * DAL_Class ModelAdmin
 * @package Models
 */
class ModelAdmin implements IActor {

    /**
     * If the login exists, create a session
     *
     * @param string $login
     * @param string $pwd
     * @return \DAL_Class\Admin || null
     */
    public static function connection(string $login, string $pwd) {
        $gw = new \DAL_Gateway\AdminGateway();
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
     *
     * @return \DAL_Class\Admin || NULL
     */
    public static function isActor() {
        if (isset($_SESSION['role'])
            && $_SESSION['role'] == 'admin'
            && isset($_SESSION['login'])) {

            // clean params

            $gw = new \DAL_Gateway\AdminGateway();
            $a = $gw->getAdmin($_SESSION['login']);

            return sizeof($a) > 0 ? $a[0] : null;
        }

        return null;
    }

    /**
     * Add a RSS in the DB
     *
     * @param \DAL_Class\Rss $rss
     * @return bool
     */
    public static function addRSS(\DAL_Class\Rss $rss) : bool {
        $gw = new \DAL_Gateway\RssGateway();

        return $gw->addRSS($rss);
    }

    /**
     * Delete a RSS from the DB
     *
     * @param string $rssUrl
     * @return bool
     */
    public static function delRSS(string $rssUrl) : bool {
        $gw = new \DAL_Gateway\RssGateway();

        return $gw->delRSS($rssUrl);
    }
}