<?php

namespace Controllers;

/**
 * DAL_Class UserController
 * @package Controllers
 */
class UserController {
    function __construct() {
    }

    function execute($action, $REP, $VIEWS) {
        switch ($action) {
            case 'click':
                $this->onClick($REP, $VIEWS);
                break;
            case 'connect':
                $this->onConnect($REP, $VIEWS);
                break;
            case null:
            default:
                $actor = \Models\ModelAdmin::isActor();
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

        $TOTNEWS = \Models\Model::getTotalNews();
        $TOTPAGE = ceil($TOTNEWS / $NEWSPERPAGE);

        if ($CURPAGE > $TOTPAGE) {
            $CURPAGE = 1;
        }

        $ADMIN = $actor;

        $FAILCON = $failed;
        $NEWS = \Models\Model::getNews($CURPAGE * $NEWSPERPAGE - $NEWSPERPAGE);
        require ($REP.$VIEWS['base']);
    }

    function onClick($REP, $VIEWS) {

    }

    function onConnect($REP, $VIEWS) {
        $usr = $_POST['username'];
        $pwd = $_POST['password'];

        $ADMIN = \Models\ModelAdmin::connection($usr, $pwd);

        $FAILCON = $ADMIN ? false : true;

        $this->base(true, $REP, $VIEWS, $FAILCON);
        //require ($REP.$VIEWS['base']);
    }
}