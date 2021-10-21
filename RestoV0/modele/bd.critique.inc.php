<?php

include_once "bd.inc.php";

function getCritiqueByIdR($idR) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select note, commentaire, pseudoU from critiquer c INNER JOIN utilisateur u ON c.mailU = u.mailU where idR=:idR");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getCritique() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select note, idR from critiquer ORDER BY idR ASC");
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>