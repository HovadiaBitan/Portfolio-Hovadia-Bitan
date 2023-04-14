BIENVENUE



<br/>

<?php
  
    
   
    if(isset($_GET["tombola"])  ) {
    
       
       $tombola = $_GET["tombola"];
	   $nom = $_GET["nom"];
	   $prix = $_GET["prix"];
       

require "connexion.php";
require "function.php";
 
 $sql = "insert into tombola(numero, nom, prix) values (NULL, '$nom', $prix)";
// echo $sql;
for($i=0; $i<$tombola;$i++)
	requete($connexion, $sql);

//echo "truc";
}

?>