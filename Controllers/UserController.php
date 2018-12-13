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

        $CURPAGE = $_GET['page'] || 0;

        //if (!Validation::Valid_page($page)) {
        //    $page = 1;
        //}

        $TOTNEWS = Model::getTotalNews();

        $NEWS = Model::getNews($CURPAGE);
        require ($REP.$VIEWS['base']);
    }

    function onClick() {

    }

    function admin($REP, $VIEWS) {
        require ($REP. $VIEWS['admin']);
    }
}