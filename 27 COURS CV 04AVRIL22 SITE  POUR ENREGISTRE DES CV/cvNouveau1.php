<?php
require "connexion.php";
// code pour tester les valeurs reçues, à compléter
$err = "ok";
if (isset($_POST["nom"])){
	// transforme les cases du tableau, en variables
	extract($_POST);
	if ($nom == "") $err .= "&nom";
	if ($prenom == "") $err .= "&prenom";
	//.. reste des tests + tests sécurité
	
	// requête poutr insérer un cv
	$sql = "INSERT INTO cv (email, telephone, titre, nom, prenom, image, rue, numRue, codePostal, ville, permis, datePermis, centreInteret) VALUES ('$email','$telephone', '$titre',  '$nom', '$prenom', '$photo', '$nomRue', '$numRue', '$codePostal', '$ville', '$permis', '$datePermis', '$centreInteret') ";
	
	if ($err == "ok"){
		$req = mysqli_query($lien, $sql);
		if (!$req ) 
			echo "problème base de données, veuillez recommencer ou contactez le webmaster"."<p></p>".$sql;
	
	
		else 
			header("Location:index.php?lien=cvNouveau2&email=$email&nom=$nom&prenom=$prenom");
			
		
	}
	else 
		header("Location:index.php?lien=cvNouveau&$err");
}

else {echo "problème, formlaire non reçu";}

mysqli_close($lien);
?>