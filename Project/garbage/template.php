<?php
$num = '1';
$nom = 'bessi';
$group = '3';
$date = date('l jS \of F Y h:i:s A');

$TMessage = [];


function pourcentageAvis(string $typeAvis, int $nbAvisFav, int $nbAvisDefav) : string {
    try {
        if ($typeAvis == 'favorable') {
            $pourcentage = intdiv($nbAvisFav * 100, $nbAvisFav + $nbAvisDefav);
        } else {
            $pourcentage = intdiv($nbAvisDefav * 100, $nbAvisFav + $nbAvisDefav);
        }
        return "Le pourcentage d'avis de type $typeAvis est de : $pourcentage%";
    } catch (DivisionByZeroError $err) {
        $TMessage[]=$err->getMessage();
        return "attention calcul du pourcentage impossible - division par zéro";
    }
}

$res = pourcentageAvis('favorable', 10, 40);
echo $res;
require "./erreur.php";

require_once "./Validation.php";
$res = Validation::Clean_email("lol@lol.com...");
echo $res;
var_dump($res);