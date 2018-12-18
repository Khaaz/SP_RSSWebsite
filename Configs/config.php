<?php

// Dir
$REP=__DIR__.'/../';

// Get data from config.json instead of hardcoded values
$string = file_get_contents("./config.json");
$json = json_decode($string, true);

$BASE = $json['db'];
$LOGIN = $json['login'];
$PWD = $json['password'];

// $BASE = "mysql:host=berlin.iut.local;dbname=dblarossi";
// $LOGIN = "larossi";
// $PWD = "achanger";

$NEWSPERPAGE = 5;

// Views
$VIEWS['error']='Views/error.php';
$VIEWS['base']='Views/base.php';
$VIEWS['admin']='Views/admin.php';


?>