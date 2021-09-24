<?php
	include_once "bd.inc.php";
	include_once "bd.resto.inc.php";
    include_once "bd.proposer.inc.php";
    include_once "bd.typecuisine.inc.php";

    echo "connexionPDO() : ";
    print_r(connexionPDO());
      
	echo "</br>getRestos() :";
    print_r(getRestos());

    echo "</br>getRestoByIdR(idR) :";
    print_r(getRestoByIdR(1));

    echo "</br>getProposerByIdR(idR) :";
    print_r(getProposerByIdR(1));

    echo "</br>getProposerByIdR(idR) :";
    print_r(getProposerByIdR(1));

    echo "</br>getTypeCuisineByIdTC(idR) :";
    print_r(getTypeCuisineByIdTC(1));


?>