<?php

include_once "$racine/modele/bd.resto.inc.php";
include_once "$racine/modele/bd.typecuisine.inc.php";
include_once "$racine/modele/bd.photo.inc.php";
include_once "$racine/modele/bd.critique.inc.php";

// recuperation des donnees GET, POST, et SESSION
;
$menuBurger = array();

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$lesRestos = getRestos();
$photos = getPhotos();
$typecuisine = getTypeCuisine();
$critiques = getCritique();
$lesPhotos = array();
$lesNotes = array();

// traitement si necessaire des donnees recuperees
for ($i = 0; $i < count($photos); $i++) {
    if(!array_key_exists($photos[$i]['idR'],$lesPhotos)){
        $lesPhotos[$photos[$i]['idR']] = $photos[$i]['cheminP'];
    }
}

for ($i = 0; $i < count($lesRestos); $i++) {
        $id = $lesRestos[$i]['idR'];
        $nom = $lesRestos[$i]['nomR'];
        $critiques = getCritiqueByIdR($id);
        $note = 0;
        for ($j = 0; $j < count($critiques); $j++) {
            $note += $critiques[$j]['note'];
        }

        if(count($critiques) > 0)
        {
            $note = $note / count($critiques);
            array_push($lesNotes,array('note'=>$note, 'idR'=>$id, 'nomR'=>$nom));
        }
}

rsort($lesNotes);

for ($i = 0; $i < 3; $i++) {
    array_push($menuBurger,array('url' => "./?action=detail&idR=".$lesNotes[$i]['idR'], 'label' => $lesNotes[$i]['nomR']));
}


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des restaurants répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeRestos.php";
include "$racine/vue/pied.html.php";
/*
for ($i = 0; $i < count($critiques); $i++) {
        if($critiques[$i]['idR'] == $id) {
            $lesNotes[$critiques[$i]['idR']] += $critiques[$i]['note'];
        }else{
            $lesNotes[$critiques[$i]['idR']] = $critiques[$i]['note'];
            $id = $critiques[$i]['idR'];
            $count = 1;
        }
}

 */
?>