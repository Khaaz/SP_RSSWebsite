<?php


    require_once(__DIR__ . '/Configs/config.php');

    //require_once(__DIR__ . '/Utility/AutoloadOld.php');
    //AutoloadOld::charger();

    //autoloader conforme norme PSR-0
    require_once(__DIR__ . '/Utility/SplClassLoader.php');
    $myLibLoader = new SplClassLoader('Controllers', './');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('Models', './');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('DAL', './');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('DAL_Class', './DAL/');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('DAL_Factory', './DAL/');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('DAL_Gateway', './DAL/');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('Utility', './');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('Services', './');
    $myLibLoader->register();
    $myLibLoader = new SplClassLoader('Services_Parser', './Services/');
    $myLibLoader->register();

    //require 'addadmin.php';

    //require "testparser.php";

    require_once '../vendor/autoload.php';

    $loader = new Twig_Loader_Filesystem('./Views/');
    $twig = new Twig_Environment($loader);
    $cont = new \Controllers\FrontController($twig);

?>
