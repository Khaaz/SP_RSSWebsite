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

        switch ($action) {
            case 'connect':
                $this->onConnect($REP, $VIEWS);
                break;
            case null:
            default:
                $actor = ModelAdmin::isActor();
                $this->base($actor, $REP, $VIEWS, false);
        }

    }

    function base($actor, $REP, $VIEWS, $failed) {
        global $NEWSPERPAGE;
        $CURPAGE = $_GET['page'];

        if (empty($CURPAGE) || strlen($CURPAGE) == 0 || $CURPAGE < 1) {
            $CURPAGE = 1;
        }

        //if (!Valider::Valid_page($page)) {
        //    $page = 1;
        //}

        $TOTNEWS = Model::getTotalNews();
        $TOTPAGE = ceil($TOTNEWS / $NEWSPERPAGE);

        if ($CURPAGE > $TOTPAGE) {
            $CURPAGE = 1;
        }

        $ADMIN = $actor;

        $FAILCON = $failed;
        $NEWS = Model::getNews($CURPAGE * $NEWSPERPAGE - $NEWSPERPAGE);
        require ($REP.$VIEWS['base']);
    }

    function onConnect($REP, $VIEWS) {
        $usr = $_POST['username'];
        $pwd = $_POST['password'];

        $ADMIN = ModelAdmin::connection($usr, $pwd);

        $FAILCON = $ADMIN ? false : true;

        $this->base(true, $REP, $VIEWS, $FAILCON);
        //require ($REP.$VIEWS['base']);
    }
}