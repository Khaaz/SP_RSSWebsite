<?php

namespace Controllers;

/**
 * DAL_Class AdminController
 * @package Controllers
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
                $this->onAddRss($actor, $REP, $VIEWS);
                break;
            case 'delRss':
                $this->onDelRss($actor, $REP, $VIEWS);
                break;
            case null:
            default:
                $this->baseAdmin($actor, $REP, $VIEWS);
        }
    }

    function baseAdmin($actor, $REP, $VIEWS) {
        $ADMIN = $actor;
        require($REP.$VIEWS['admin']);
    }

    public function onDisconnect($REP, $VIEWS) {
        \Models\ModelAdmin::disconnection();

        //$host  = $_SERVER['HTTP_HOST'];
        // redirects to base index.php
        header("Location: index.php");
    }

    public function onAddRss($actor, $REP, $VIEWS) {
        $ADMIN = $actor;

        $url = $_POST['RssUrl'];
        $name = $_POST['WebsiteName'];
        $website = $_POST['WebsiteUrl'];

        if (!\Utility\Valider::Valid_url($url) || !\Utility\Valider::Valid_websiteName($name) || !\Utility\Valider::Valid_url($website)) {
            $this->baseAdmin($ADMIN, $REP, $VIEWS);
            return;
        };

        $url = \Utility\Cleaner::Clean_url($url);
        $name = \Utility\Cleaner::Clean_websiteName($name);
        $website = \Utility\Cleaner::Clean_url($website);

        $rss = new \DAL_Class\Rss($url, $name, $website);

        \Models\ModelAdmin::addRSS($rss);
        require($REP.$VIEWS['admin']);
    }

    public function onDelRss($actor, $REP, $VIEWS) {
        $ADMIN = $actor;
        require($REP.$VIEWS['admin']);
    }
}