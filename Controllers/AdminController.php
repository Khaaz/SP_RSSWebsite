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
                $this->baseAdmin($actor, $REP, $VIEWS);
                break;
            case 'disconnect':
                $this->onDisconnect($REP, $VIEWS);
                break;
            case 'addRss':
                $this->onAddRss($REP, $VIEWS);
                break;
            case 'delRss':
                $this->onDelRss($REP, $VIEWS);
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

        //$host  = $_SERVER['HTTP_HOST'];
        // redirects to base index.php
        header("Location: index.php");
    }

    public function onAddRss($REP, $VIEWS) {
        $url = $_POST['RssUrl'];
        $name = $_POST['WebsiteName'];
        $website = $_POST['WebsiteUrl'];

        // verif validity

        $rss = new Rss($url, $name, $website);

        ModelAdmin::addRSS($rss);
        require($REP.$VIEWS['admin']);
    }

    public function onDelRss($REP, $VIEWS) {

    }
}