<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tombola_consulter_resultats.php"method="GET">
    <select name="nom">
	
	<?php 
	require "connexion.php";
	require "function.php";
	
	$sql = "select distinct nom from tombola ";
	
	$req = requete($connexion, $sql);
	
	while($ligne = mysqli_fetch_assoc($req)){
		$nom = $ligne["nom"];
        echo "\n<option value='$nom'>$nom </option>";
	}
    
	?>
	
	
	
	
	
	
	</select> 
	
	
        <button type="submit">
            valider
         </button>
  </form>
  
<form action="tombola_consulter_resultats.php"method="GET"> 
consulter total des billets vendus  
  <button type="submit">
            <input type="hidden" name="total">
			valider
         </button>
</form>
</body>
</html>
