<?php

/**
 * Class AdminController
 */
class AdminController {
    public function __construct() {
    }

    function execute($action, $actor, $REP, $VIEWS) {

        switch ($action) {
            case 'admin':
                $this->baseAdmin($REP, $VIEWS);
                break;
            case 'disconnect':
                $this->onDisconnect($REP, $VIEWS);
                break;
            case 'addNews':
                $this->onAddNews($REP, $VIEWS);
                break;
            case 'delNews':
                $this->onDelNews($REP, $VIEWS);
                break;
            case null:
            default:
                $this->baseAdmin($REP, $VIEWS);
        }
    }

    function baseAdmin($REP, $VIEWS) {
        require($REP.$VIEWS['admin']);
    }

    public function onDisconnect($REP, $VIEWS) {

    }

    public function onAddNews($REP, $VIEWS) {

    }

    public function onDelNews($REP, $VIEWS) {

    }
}