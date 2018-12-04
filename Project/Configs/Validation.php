<?php
/**
 * Created by PhpStorm.
 * User: lobellec
 * Date: 15/11/18
 * Time: 10:24
 */

class Validation {

    public static function Valid_name(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_);
        }
        $regex = "/[A-Z][a-z]{1,30}(-[A-Z])?[a-z]{,30}/";
        return false;
    }

    public static function Clean_name(string $str) : string {
        if (isset($str)) {
            return filter_var($str, FILTER_SANITIZE_EMAIL);
        }
        return false;
    }
    public static function Valid_email(string $str) : bool {
        if (isset($str)) {
            return filter_var($str, FILTER_VALIDATE_EMAIL);
        }
        return false;
    }
    public static function Clean_email(string $str) : string {
        if (isset($str)) {
            return filter_var($str, FILTER_SANITIZE_EMAIL);
        }
        return false;
    }
}

?>