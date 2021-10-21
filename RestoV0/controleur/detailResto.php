<?php

include_once "$racine/modele/bd.resto.inc.php";
include_once "$racine/modele/bd.typecuisine.inc.php";
include_once "$racine/modele/bd.photo.inc.php";
include_once "$racine/modele/bd.critique.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"#top","label"=>"Le restaurant");
$menuBurger[] = Array("url"=>"#adresse","label"=>"Adresse");
$menuBurger[] = Array("url"=>"#photos","label"=>"Photos");
$menuBurger[] = Array("url"=>"#horaires","label"=>"Horaires");

// recuperation des donnees GET, POST, et SESSION
$idR = $_GET["idR"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$unResto = getRestoByIdR($idR);
$photos = getPhotosByIdR($idR);
$critiques = getCritiqueByIdR($idR);
$cuisine = getTypeCuisineByIdR($idR);

// traitement si necessaire des donnees recuperees
$note = 0;
$moyenne = 0;
for ($i = 0; $i < count($critiques); $i++) {
    $note += $critiques[$i]['note'];
}
if(count($critiques) > 0)
{
    $moyenne = $note / count($critiques);
}


$like = round($moyenne);
$dislike = 5 - $like;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'un restaurant";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailResto.php";
include "$racine/vue/pied.html.php";
?>