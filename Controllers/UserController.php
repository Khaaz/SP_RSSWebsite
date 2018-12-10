<?php

/**
 * Created by PhpStorm.
 * User: khaaz
 * Date: 12/4/18
 * Time: 11:27 PM
 */

class UserController {
    function __construct() {
        session_start();
        $this->execute();
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

        $page = $_GET['page'] || 0;

        //if (!Validation::Valid_page($page)) {
        //    $page = 1;
        //}
        //$NEWS = Model::getNews($page);
        require ($REP.$VIEWS['base']);
    }

    function onClick() {

    }
}