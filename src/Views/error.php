<?php
/**
 * Created by PhpStorm.
 * Admin: lobellec
 * Date: 29/11/18
 * Time: 10:53
 */
if (isset($ERRORS)) {
    foreach($ERRORS as $value) {
        echo $value;
        echo "<br>";
    }
}