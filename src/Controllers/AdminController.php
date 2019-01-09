<?php

namespace Controllers;

/**
 * DAL_Class AdminController
 * @package Controllers
 */
class AdminController {
    public function __construct() {
    }

    function execute($twig, $action, $actor) {
        switch ($action) {
            case 'admin':
                $this->baseAdmin($twig, $actor, false, false, false);
                break;
            case 'disconnect':
                $this->onDisconnect();
                break;
            case 'addRss':
                $this->onAddRss($twig, $actor);
                break;
            case 'delRss':
                $this->onDelRss($twig, $actor);
                break;
            case null:
            default:
                $this->baseAdmin($twig, $actor, false, false, false);
        }
    }

    function baseAdmin($twig, $actor, $add, $remove, $failed) {

        $rssList = \Models\ModelAdmin::getRSS();
        $template = $twig->load('admin.html');
        echo $template->render(array(
            'RSSlist' => $rssList,
            'admin' => $actor,
            'add' => $add,
            'remove' => $remove,
            'failed' => $failed
        ));
    }

    public function onDisconnect() {
        \Models\ModelAdmin::disconnection();

        //$host  = $_SERVER['HTTP_HOST'];
        // redirects to base index.php
        header("Location: index.php");
    }

    public function onAddRss($twig, $actor) {

        $url = $_POST['RssUrl'];
        $name = $_POST['WebsiteName'];
        $website = $_POST['WebsiteUrl'];

        if (!\Utility\Valider::Valid_url($url) || !\Utility\Valider::Valid_websiteName($name) || !\Utility\Valider::Valid_url($website)) {
            $this->baseAdmin($twig, $actor, true, false, true);
            return;
        };

        $url = \Utility\Cleaner::Clean_url($url);
        $name = \Utility\Cleaner::Clean_websiteName($name);
        $website = \Utility\Cleaner::Clean_url($website);

        $rss = new \DAL_Class\Rss($url, $name, $website);

        try {
            \Models\ModelAdmin::addRSS($rss);
        } catch (\PDOException $e) {
            $this->baseAdmin($twig, $actor, true, false, true);
            return;
        }
        
        $this->baseAdmin($twig, $actor, true, false, false);
    }

    public function onDelRss($twig, $actor) {

        $rssUrl = $_POST['rssList'];

        if (\Utility\Valider::Valid_url($rssUrl)) {
            $rssUrl = \Utility\Cleaner::Clean_url($rssUrl);
            \Models\ModelAdmin::delRSS($rssUrl);
            $this->baseAdmin($twig, $actor, false, true, true);
            return;
        }

        $this->baseAdmin($twig, $actor, false, true, false);
    }
}