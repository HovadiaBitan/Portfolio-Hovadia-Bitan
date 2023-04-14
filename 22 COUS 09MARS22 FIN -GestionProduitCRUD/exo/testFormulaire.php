<?php
$erreur= "err";

if (isset($_POST["nom"]))
	if ($_POST["nom"] == "")
		$erreur = $erreur."&nom";
		
	
if (isset($_POST["age"]))
	if ($_POST["age"] == "select")
		$erreur = $erreur."&age";
	
if (!isset($_POST["genre"]))
	
		$erreur = $erreur."&genre";

$adresse = 	'Location:formulaire.php?'.$erreur;
header($adresse);




?>