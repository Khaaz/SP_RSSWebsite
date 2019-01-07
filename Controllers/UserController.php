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

        // DEFAULT
        if (empty($CURPAGE) || strlen($CURPAGE) == 0 || $CURPAGE < 1) {
            $CURPAGE = 1;
        }

        // VALID AND CLEAN
        if (!\Utility\Valider::Valid_page($CURPAGE)) {
            $CURPAGE = 1;
        }
        $CURPAGE = \Utility\Cleaner::Clean_page($CURPAGE);

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
        $link = $_GET['newsUrl'];

        if (!\Utility\Valider::Valid_url($link)) {
            return;
        }

        $link = \Utility\Cleaner::Clean_url($link);
        header("Location: $link");
    }

    function onConnect($REP, $VIEWS)
    {
        $usr = $_POST['username'];
        $pwd = $_POST['password'];

        if (!\Utility\Valider::Valid_login($usr) || !\Utility\Valider::Valid_password($pwd)) {
            $this->base(true, $REP, $VIEWS, true);
            return;
        };

        $usr = \Utility\Cleaner::Clean_login($usr);
        $pwd = \Utility\Cleaner::Clean_login($pwd);

        $ADMIN = \Models\ModelAdmin::connection($usr, $pwd);

        $ADMIN ? $this->base($ADMIN, $REP, $VIEWS, false) : $this->base(true, $REP, $VIEWS, true);
    }
}