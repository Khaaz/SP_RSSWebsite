<?php

namespace Utility;

/**
 * DAL_Class Cleaner
 * @package Utility
 */
class Cleaner {

    public static function Clean_page(int $page) : bool {
        if (!isset($page)) {
            return false;
        }
        $res = filter_var($page, FILTER_VALIDATE_INT);
    }

    public static function clean_string(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE);
        }
        return false;
    }

    public static function Clean_name(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_INT);
        }
        $regex = "/[A-Z][a-z]{1,30}(-[A-Z])?[a-z]{,30}/";
        if (!filter_var(
            $str,
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp"=>$regex))
        )
        ) {
            return false;
        }
        return false;
    }

    public static function Clean_surname(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_EMAIL);
        }
        return false;
    }

    public static function Clean_email(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_EMAIL);
        }
        return false;
    }

    public static function Clean_login(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_EMAIL);
        }
        return false;
    }

    public static function Clean_password(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_EMAIL);
        }
        return false;
    }

    public static function Clean_url(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_SANITIZE_EMAIL);
        }
        return false;
    }
}