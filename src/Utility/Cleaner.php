<?php

namespace Utility;

/**
 * DAL_Class Cleaner
 * @package Utility
 */
class Cleaner {

    public static function Clean_action(string $str) : bool {
        if (!isset($str)) {
            return false;
        }
        return filter_var($str, FILTER_SANITIZE_STRING);
    }

    public static function Clean_name(string $str) {
        if (!isset($str)) {
            return false;
        }

        return filter_var($str, FILTER_SANITIZE_STRING);
    }

    public static function Clean_websiteName(string $str) {
        if (!isset($str)) {
            return false;
        }

        return filter_var($str, FILTER_SANITIZE_STRING);
    }

    public static function Clean_page(int $page) {
        if (!isset($page)) {
            return false;
        }
        return filter_var($page, FILTER_SANITIZE_NUMBER_INT);
    }

    public static function Clean_email(string $str) {
        if (!isset($str)) {
            return false;
        }
        return filter_var($str, FILTER_SANITIZE_EMAIL);;
    }

    public static function Clean_url(string $str) {
        if (!isset($str)) {
            return false;
        }
        return filter_var($str, FILTER_SANITIZE_URL);
    }

    public static function Clean_login(string $str) {
        if (!isset($str)) {
            return false;
        }
        return filter_var($str, FILTER_SANITIZE_STRING);
    }

    public static function Clean_password(string $str) {
        if (!isset($str)) {
            return false;
        }
        return filter_var($str, FILTER_SANITIZE_STRING);
    }
}