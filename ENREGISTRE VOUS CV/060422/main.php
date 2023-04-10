<?php
/*
 main.php est chargée par index.php : tout ce qui sera donc envoyé par index.php sera bien reçu par main.php
 Ainsi dans notre code nous pourrons analyser ce que nous recevons en GET dans index.php
 

*/

// D'abord on teste si on a reç quelque chose
if (isset($_GET["lien"])){
	
	// dans ce cas, on regarde ce qu'il y a dedans, et on charge la bonne page.
	switch($_GET["lien"]){
		case "cvNouveau":require "cvNouveau.php";break;
		case "cvConsulter":require "cvConsulter.php";break;
		case "cvModifier":require "cvModifier.php";break;
		case "cvSupprimer":require "cvModifier.php";break;
		case "cvNouveau1":require "cvNouveau1.php";break;
		case "cvNouveau2":require "cvNouveau2.php";break;
		case "cvNouveau2b":require "cvNouveau2b.php";break;
		
		case "cvNouveau3":require "cvNouveau3.php";break;
		case "cvNouveau3b":require "cvNouveau3b.php";break;
		case "cvNouveau4":require "cvNouveau4.php";break;
		case "cvNouveau4b":require "cvNouveau4b.php";break;
		
			
		
		// si on trouve dans $_GET["lien"] une valeur qui n'est pas prévue, on charge la page d'accueil.
		default: require "accueil.php";
	}	
}

// suite du if : si on n'a pas reçu de variable $_GET["lien"] (par exemple la première fois où on arrive sur l'index.php), on charge la page d'accueil
else require "accueil.php";
?>