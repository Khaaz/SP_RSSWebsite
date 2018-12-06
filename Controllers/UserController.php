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
        echo "test";
        global $REP, $VIEWS;
        try {
            $action = $_REQUEST['action'];

            switch ($action) {
                case null:
                    echo "what2";
                    $this->base($REP, $VIEWS);
                    break;
                case 'click':
                    $this->onClick($REP, $VIEWS);
                    break;
                default:
                    echo "what";
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
        echo "what3";
        $page = $_GET['page'] || 1;

        if (!Validation::Valid_page($page)) {
            echo "what4";
            $page = 1;
        }
        echo "what18";
        $NEWS = Model::getNews($page);
        var_dump($NEWS);
        require ($REP.$VIEWS['base']);
    }

    function onClick() {

    }
}