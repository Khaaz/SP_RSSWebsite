<?php
/**
 * Created by PhpStorm.
 * User: khaaz
 * Date: 12/13/18
 * Time: 10:06 AM
 */

class FrontController
{
    public function __construct() {
        session_start();
        $this->execute();
    }

    function execute() {
        global $REP, $VIEWS;
        try {
            $action = $_REQUEST['action'];

            switch ($action) {
                case null:
                    $ctrl = new UserController();
                    $ctrl->base($REP, $VIEWS);
                    break;
                case 'createRss':
                    $ctrl = new AdminController();
                    $ctrl->createRss($REP, $VIEWS);
                    break;
                default:
                    $ctrl = new UserController();
                    $ctrl->base($REP, $VIEWS);
            }
        } catch(PDOException $e) {
            $ERRORS[] =	"DataBase error";
            require ($REP.$VIEWS['error']);
        } catch (Exception $e) {
            $ERRORS[] =	"Unexpected error";
            require ($REP.$VIEWS['error']);
        }
    }
}