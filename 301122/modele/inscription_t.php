<?php
//require "modele/connexion.php";
// code pour sécuriser les données, non-écrit ici.

// appeler fichier modele, piour qu'il fasse le travail.
extract($_POST);

$sql = "INSERT INTO etudiant (email, nom, prenom, nomRue, numRue, ville, cp, password, tel) VALUES ('$email', '$nom', '$prenom', '$nomRue', '$numRue', '$ville', '$cp', '$password', '$tel');";

//echo $sql;

if (!mysqli_query($lien, $sql))
		echo "inscription impossible";

mysqli_close($lien);

?>