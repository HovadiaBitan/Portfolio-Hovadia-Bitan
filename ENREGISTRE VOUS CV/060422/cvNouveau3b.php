 
 <?php
require "connexion.php";
// code pour tester les valeurs reçues, à compléter
//$err = "ok"; gestion des erreurs, non omplémenté ici
if (isset($_POST["libDiplome"])){
	// transforme les cases du tableau, en variables
	extract($_POST);
	$email = $_GET["email"];
	/*if ($nomExp == "") $err .= "&nomExp";
	if ($descExp == "") $err .= "&prenom";
	//.. reste des tests + tests sécurité7
	*/
	if (isset($obtenu)) $obtenu = 1; else $obtenu = 0;
	// requête poutr insérer un cv
	$sql = "INSERT INTO etude (dateDebut,  dateFin, lieu, typeDiplome, libelleDiplome, obtenu, email) VALUES ('$dateDeb','$dateFin', '$lieu',  '$typeDiplome', '$libDiplome', $obtenu, '$email') ";
	
	
		$req = mysqli_query($lien, $sql);
		if (!$req ) 
			echo "problème base de données, veuillez recommencer ou contactez le webmaster"."<p></p>".$sql;
	
	
		else { ?>
			 
 <a href="index.php?lien=cvNouveau4&email=<?php echo $_GET["email"]; ?>">ajouter une nouvelle competence :</a>
 
  <a href="index.php?lien=cvNouveau3&email=<?php echo $_GET["email"]; ?>">ajouter une nouvelle etude:</a>
		<?php }
			
			
		
	
}

else {echo "problème, formlaire non reçu";}

mysqli_close($lien);
?>
 
