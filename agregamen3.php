<?php

include("conecta.php");
$collection = $client->$bd->menu3;

	$nomenu= $_POST["r3nom"];
    $descmenu= $_POST["r3desc"];
	$premenu= $_POST["r3pre"];
	

	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'm3nom' => $nomenu,
		'm3desc' => $descmenu,
        'm3prec' => $premenu

		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=admenu.php")

?>