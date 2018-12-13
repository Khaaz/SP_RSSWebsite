<?php

/**
 * Created by PhpStorm.
 * User: khaaz
 * Date: 12/4/18
 * Time: 11:27 PM
 */

class UserController {
    function __construct() {
    }

    function execute() {
        global $REP, $VIEWS;
        try {
            $action = $_REQUEST['action'];

            switch ($action) {
                case null:
                    $this->base($REP, $VIEWS);
                    break;
                case 'click':
                    $this->onClick($REP, $VIEWS);
                    break;
                case 'admin':
                    echo "WTf";
                    $this->admin($REP, $VIEWS);
                    break;
                default:
                    $this->base($REP, $VIEWS);
            }
        } catch(PDOException $e) {
            $ERRORS[] =	"DataBase error";
            require ($REP.$VIEWS['error']);
        } catch (Exception $e) {
            $ERRORS[] =	"Unexpected error";
            require ($REP.$VIEWS['error']);
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

        $TOTNEWS = Model::getTotalNews();

        if ($CURPAGE < $TOTNEWS / $NEWSPERPAGE) {
            $CURPAGE = 1;
        }

        $NEWS = Model::getNews($CURPAGE / $NEWSPERPAGE - 1);
        require ($REP.$VIEWS['base']);
    }

    function onClick() {

    }

    function admin($REP, $VIEWS) {
        require ($REP.$VIEWS['admin']);
    }
}