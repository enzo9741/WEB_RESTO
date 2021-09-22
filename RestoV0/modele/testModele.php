<?php
	include_once "bd.inc.php";
	include_once "bd.resto.inc.php";
	
    echo "connexionPDO() : ";
    print_r(connexionPDO());
      
	echo "</br>getRestos() :";
    print_r(getRestos());

    echo "</br>getRestoByIdR(idR) :";
    print_r(getRestoByIdR(1));


?>