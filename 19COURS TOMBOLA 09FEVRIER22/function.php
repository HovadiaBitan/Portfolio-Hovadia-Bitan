<?php

// 2 arguments, un pour le lien de connexion, un pour la requete.

function requete($pass, $requete){
//envoi en base;
$req = mysqli_query($pass, $requete);
//var_dump($req);
//if ($req==true) echo "requete effectuée";
//else echo "requete mal formée";
return $req;

}
?>