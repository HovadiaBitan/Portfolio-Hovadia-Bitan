<?php

// code pour sécuriser les données, non-écrit ici.

// appeler fichier modele, piour qu'il fasse le travail.


$sql = "select email from etudiant where email='$email' and password='$password'";

//echo $sql;

$req = mysqli_query($lien, $sql);
if (!mysqli_affected_rows($lien))	
		echo "login ou mot de passe incorrect";
else
{	$_SESSION["email"] = $email;
	//var_dump($_SESSION);
	echo "tout va bien";
}
//echo mysqli_affected_rows($lien);



mysqli_close($lien);

?>