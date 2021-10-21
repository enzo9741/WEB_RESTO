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

function getTypeCuisineByIdR($idR) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select libelleTC, idR from typecuisine INNER JOIN proposer ON proposer.idTC = typecuisine.idTC where idR=:idR");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTypeCuisine() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select libelleTC, idR from typecuisine INNER JOIN proposer ON proposer.idTC = typecuisine.idTC ORDER BY idR ASC");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>