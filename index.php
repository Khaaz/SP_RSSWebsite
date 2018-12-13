<?php
    //si controller pas objet
    //  header('Location: controller/controller.php');

    //si controller objet

    require_once(__DIR__.'/Configs/config.php');

    //chargement autoloader pour autochargement des classes
    require_once(__DIR__.'/Configs/Autoload.php');
    Autoload::charger();

    $cont = new FrontController();

?> 