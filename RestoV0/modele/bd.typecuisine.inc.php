<?php

include_once "bd.inc.php";

function getTypeCuisineByIdTC($idTC) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select libelleTC from typecuisine where idTC=:idTC");
        $req->bindValue(':idTC', $idTC, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>