<?php

//gen
$REP=__DIR__.'/../';

// liste des modules à inclure

//$dConfig['includes']= array('controleur/Validation.php');



//BD

$BASE="mysql:host=berlin.iut.local;dbname=dblarossi";
$LOGIN="larossi";
$PWD="achanger";

//Vues

$VIEWS['error']='Views/error.php';
$VIEWS['base']='Views/base.php';
$VIEWS['admin']='Views/addnews.php';


?>