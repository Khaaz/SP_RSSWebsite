<?php

/**
 * Created by PhpStorm.
 * Admin: khaaz
 * Date: 12/4/18
 * Time: 11:27 PM
 */

class UserController {
    function __construct() {
    }

    function execute($action, $REP, $VIEWS) {

        $actor = ModelAdmin::isActor();

        switch ($action) {
            case 'connect':
                $this->onConnect($REP, $VIEWS);
                break;
            case null:
            default:
                $this->base($REP, $VIEWS);
        }

    }

    function base($REP, $VIEWS) {
        global $NEWSPERPAGE;
        $CURPAGE = $_GET['page'];

        if (empty($CURPAGE) || strlen($CURPAGE) == 0 || $CURPAGE < 1) {
            $CURPAGE = 1;
        }

        //if (!Validation::Valid_page($page)) {
        //    $page = 1;
        //}

        //$TOTNEWS = Model::getTotalNews();
        //$TOTPAGE = ceil($TOTNEWS / $NEWSPERPAGE);

        //if ($CURPAGE > $TOTPAGE) {
        //    $CURPAGE = 1;
        //}

        //$NEWS = Model::getNews($CURPAGE * $NEWSPERPAGE - $NEWSPERPAGE);
        require ($REP.$VIEWS['base']);
    }

    function onConnect($REP, $VIEWS) {
        $usr = $_POST['login'];
        $pwd = $_POST['password'];

        if (!ModelAdmin::connection($usr, $pwd)) {
            echo 'lol';
        }
    }
}