<?php 
	require "connexion.php";
	require "function.php";
	
	if(isset($_GET["nom"])){
	$nom = $_GET["nom"];
	$sql = "select prix from tombola where nom ='$nom'";
	
	$donnees = requete($connexion, $sql);
	echo "<br>".mysqli_num_rows($donnees)."<br>";
	$i =0; $total = 0;
	while($ligne = mysqli_fetch_assoc($donnees)){
		$total = $total + $ligne["prix"];
		$i++;
	}
	
	echo "nombre de tickets vendus : $i à l'acheteur $nom";
	echo "<br /> pour un total de $total euros";
	}
	
	if(isset($_GET["total"])){
		$sql = "select sum(prix) as total from tombola";
	
	$donnees = requete($connexion, $sql);
	
	$i =0; $total = 0;
	$ligne = mysqli_fetch_assoc($donnees);
		
echo "recettes totales : ".$ligne["total"];
	}
	
	
?>
