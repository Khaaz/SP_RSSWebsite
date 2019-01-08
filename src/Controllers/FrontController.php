<?php

namespace Controllers;

use PDOException;
use Exception;

/**
 * DAL_Class FrontController
 * @package Controllers
 */
class FrontController
{
    private $actions;

    public function __construct($twig) {
        session_start();
        $this->actions = array(
            'Admin' => array('disconnect', 'admin', 'addRss', 'delRss'),
        );

        $this->execute($twig);
    }

    /**
     * Default function.
     */
    function execute($twig) {
        global $REP, $VIEWS;
        try {
            $action = $_REQUEST['action'];

            $actor = $this->arraySearch($this->actions, $action);

            if ($actor) {
                // dynamically create the model and the controller;

                $mdl = '\Models\Model'.$actor;

                $actorObj = $mdl::isActor();

                if ($actorObj != null) {
                    $ctrl = '\Controllers\\'.$actor.'Controller';
                    $control = new $ctrl();

                    $control->execute($twig, $action, $actorObj);
                    return;
                }
            }

            // Use default controller
            $control = new UserController();
            $control->execute($twig, $action);

        } catch(PDOException $e) {

            $ERRORS[] =	"DataBase error";
            $ERRORS[] = $e;
            require ($REP.$VIEWS['error']);

        } catch (Exception $e) {

            $ERRORS[] =	"Unexpected error";
            $ERRORS[] = $e;
            require ($REP.$VIEWS['error']);

        }
    }

    function arraySearch($array, $key) {
        foreach($array as $k => $v) {
            if (/*!is_numeric($k) && */in_array($key, $v)) {
                return $k;
            }
        }
        return null;
    }
}