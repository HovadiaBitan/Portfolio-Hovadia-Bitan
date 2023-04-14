
<?php


$erreur = 0;

extract($_POST);
// code pour sécuriser les données, non-écrit ici.
if ($email == "sh'ha"){$erreur = 1;}
// etc..

// appeler fichier modele, pour qu'il fasse le travail d'enregistrement en base
if($erreur == 0)
	require "modele/m_connexion.php";
else 
	echo "erreur";

?>

connexion controlleur