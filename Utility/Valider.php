<?php

namespace Utility;

/**
 * DAL_Class Valider
 * @package Utility
 */
class Valider {

    public static function Valid_action(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        $re = "/^[A-Za-z]+$/";

        return !!filter_var(
            $str,
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp" => $re)
            )
        );
    }

    public static function Valid_name(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        $re = "/^[A-Z][a-z]{1,30}(-[A-Z])?[a-z]{0,30}$/";

        return !!filter_var(
            $str,
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp" => $re)
            )
        );
    }

    public static function Valid_page(int $page) : bool {
        if (!isset($page)) {
            return false;
        }
        return !!filter_var($page, FILTER_VALIDATE_INT);
    }

    public static function Valid_email(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        return !!filter_var($str, FILTER_VALIDATE_EMAIL);;
    }

    public static function Valid_url(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        return !!filter_var($str, FILTER_VALIDATE_URL);
    }

    public static function Valid_login(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        $re = "/^[A-Za-z0-9_\-]{5,50}$/";

        return !!filter_var(
            $str,
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp" => $re)
            )
        );
    }

    public static function Valid_password(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        $re = "/^[A-Za-z0-9()\[\]\+\-_?!&~,:;\*\/\\\.]{5,50}$/";

        return !!filter_var(
            $str,
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp" => $re)
            )
        );
    }
}

?>