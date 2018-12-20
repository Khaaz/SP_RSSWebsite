<?php

/**
 * Class AdminController
 */
class AdminController {
    public function __construct() {
    }

    function execute($action, $actor, $REP, $VIEWS) {
        var_dump($action);
        switch ($action) {
            case 'admin':
                $this->baseAdmin($actor, $REP, $VIEWS);
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
                $this->baseAdmin($actor, $REP, $VIEWS);
        }
    }

    function baseAdmin($actor, $REP, $VIEWS) {
        require($REP.$VIEWS['admin']);
    }

    public function onDisconnect($REP, $VIEWS) {
        ModelAdmin::disconnection();
    }

    public function onAddNews($REP, $VIEWS) {
        $usr = $_POST['RssUrl'];
        $pwd = $_POST['WebsiteName'];
        $pwd = $_POST['WebsiteUrl'];
    }

    public function onDelNews($REP, $VIEWS) {

    }
}