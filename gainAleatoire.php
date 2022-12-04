<?php

header("Content-Type: text/plain; charset=utf-8");
header("Cache-Control: no-cache . private");
header("Pragma: no-cache");
sleep(2);

$parametresJSON = file_get_contents('php://input');

// require_once('JSON.php');

// $objet_json = new Services_JSON();

$objetJoueur = json_decode($parametresJSON);

$nomJoueur = $objetJoueur->nom;

$prenomJoueur = $objetJoueur->prenom;

$gain = rand(0,100);

$nom = $prenomJoueur." ".$nomJoueur;

$resultat = $nom.':'.$gain;


echo $resultat;

?>