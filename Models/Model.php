<?php
/**
 * Created by PhpStorm.
 * User: lobellec
 * Date: 06/12/18
 * Time: 09:56
 */

class Model {
    static function getNews(int $page) : Array {
        $gw = new NewsGateway();
        return $gw->getNews($page);
    }

    static function getTotalNews(): int {
        $gw = new NewsGateway();
        return $gw->getTotNews()[0];
    }
}