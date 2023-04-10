 
 <?php
require "connexion.php";
// code pour tester les valeurs reçues, à compléter
//$err = "ok"; gestion des erreurs, non omplémenté ici
if (isset($_POST["nomExp"])){
	// transforme les cases du tableau, en variables
	extract($_POST);
	$email = $_GET["email"];
	/*if ($nomExp == "") $err .= "&nomExp";
	if ($descExp == "") $err .= "&prenom";
	//.. reste des tests + tests sécurité7
	*/
	
	// requête poutr insérer un cv
	$sql = "INSERT INTO experience (email,  description, nom, lieu, dateDebut, dateFin, ville, codePostal) VALUES ('$email','$descExp', '$nomExp',  '$lieuExp', '$dateDeb', '$dateFin', '$ville', '$codePostal') ";
	
	
		$req = mysqli_query($lien, $sql);
		if (!$req ) 
			echo "problème base de données, veuillez recommencer ou contactez le webmaster"."<p></p>".$sql;
	
	
		else { ?>
			 
 <a href="index.php?lien=cvNouveau2&$email=<?php echo $_GET["email"]; ?>">ajouter une nouvelle expérience :</a>
 
  <a href="index.php?lien=cvNouveau3&$email=<?php echo $_GET["email"]; ?>">ajouter les diplômes:</a>
		<?php }
			
			
		
	
}

else {echo "problème, formlaire non reçu";}

mysqli_close($lien);
?>
 
