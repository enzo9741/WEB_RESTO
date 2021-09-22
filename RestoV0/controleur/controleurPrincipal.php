<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["accueil"] = "listeRestos.php";
    $lesActions["detail"] = "detailResto.php";
        
    if (array_key_exists ($action, $lesActions)){
        return $lesActions[$action];
    }
    else{
        return $lesActions["accueil"];
    }

}

?>