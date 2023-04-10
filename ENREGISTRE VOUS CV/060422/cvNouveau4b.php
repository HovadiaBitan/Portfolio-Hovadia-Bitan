 
 <?php
require "connexion.php";
// code pour tester les valeurs reçues, à compléter
//$err = "ok"; gestion des erreurs, non omplémenté ici
if (isset($_POST["competence"])){
	// transforme les cases du tableau, en variables
	extract($_POST);
	$email = $_GET["email"];
	/*if ($nomExp == "") $err .= "&nomExp";
	if ($descExp == "") $err .= "&prenom";
	//.. reste des tests + tests sécurité7
	*/
	
	// requête poutr insérer une compétence
	$sql = "INSERT INTO cvCompetence (email,  nomCompetence, niveau) VALUES ('$email','$competence', '$niveau') ";
	
	
		$req = mysqli_query($lien, $sql);
		if (!$req ) 
			echo "problème base de données, veuillez recommencer ou contactez le webmaster"."<p></p>".$sql;
	
	
		else { ?>
			 
 <a href="index.php?lien=cvNouveau4&email=<?php echo $_GET["email"]; ?>">ajouter une nouvelle competence :</a>
 
  <a href="index.php?lien=accueil&email=<?php echo $_GET["email"]; ?>">terminer</a>
		<?php }
			
			
		
	
}

else {echo "problème, formlaire non reçu";}

mysqli_close($lien);
?>
 
