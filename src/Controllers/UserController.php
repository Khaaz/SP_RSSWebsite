<?php

namespace Controllers;

/**
 * DAL_Class UserController
 * @package Controllers
 */
class UserController {
    function __construct() {
    }

    function execute($twig, $action) {
        switch ($action) {
            case 'click':
                $this->onClick($twig);
                break;
            case 'connect':
                $this->onConnect($twig);
                break;
            case 'trending':
                $actor = \Models\ModelAdmin::isActor();
                $this->onTrending($twig, $actor);
                break;
            case null:
            default:
                $actor = \Models\ModelAdmin::isActor();
                $this->base($twig, $actor, false);
        }
    }

    function base($twig, $actor, $failed) {
        global $NEWSPERPAGE;
        $curPage = $_GET['page'];

        // DEFAULT
        if (empty($curPage) || strlen($curPage) == 0 || $curPage < 1) {
            $curPage = 1;
        }

        // VALID AND CLEAN
        if (!\Utility\Valider::Valid_page($curPage)) {
            $curPage = 1;
        }
        $curPage = \Utility\Cleaner::Clean_page($curPage);

        $totNews = \Models\Model::getTotalNews();
        $totPage = ceil($totNews / $NEWSPERPAGE);
        if ($curPage > $totPage) {
            $curPage = 1;
        }

        $news = \Models\Model::getNews($curPage * $NEWSPERPAGE - $NEWSPERPAGE);

        $min = $curPage > 2 ? $curPage - 2 : 1;
        $max = $curPage < ($totPage - 2) ? $curPage + 2 : $totPage;
        $prev = $curPage <= 1 ? 1 : $curPage - 1;
        $next = $curPage >= $totPage ? $totPage : $curPage + 1;


        $template = $twig->load('base.html');
        echo $template->render(array(
            'admin' => $actor,
            'failCon' => $failed,
            'news' => $news,
            'curPage' => $curPage,
            'next' => $next,
            'prev' => $prev,
            'min' => $min,
            'max' => $max,
        ));
    }

    function onClick($twig) {
        $link = $_GET['newsUrl'];

        if (!\Utility\Valider::Valid_url($link)) {
            return;
        }

        $link = \Utility\Cleaner::Clean_url($link);

        \Models\Model::addClick($link);

        header("Location: $link");
    }

    function onConnect($twig)
    {
        $usr = $_POST['username'];
        $pwd = $_POST['password'];

        if (!\Utility\Valider::Valid_login($usr) || !\Utility\Valider::Valid_password($pwd)) {
            $this->base($twig,true, true);
            return;
        };

        $usr = \Utility\Cleaner::Clean_login($usr);
        $pwd = \Utility\Cleaner::Clean_login($pwd);

        $admin = \Models\ModelAdmin::connection($usr, $pwd);

        $admin ? $this->base($twig, $admin, false) : $this->base($twig,true, true);
    }

    function onTrending($twig, $actor) {

        $trendings = \Models\Model::getTrendings();

        $template = $twig->load('trending.html');
        echo $template->render(array(
            'admin' => $actor,
            'trendings' => $trendings,
        ));

    }
}