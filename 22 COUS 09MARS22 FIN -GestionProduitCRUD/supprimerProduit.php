<?php

require "connexion.php";

$sql = "DELETE FROM produit WHERE id = ".$_GET["id"];

if (mysqli_query($lien, $sql)) echo "suppression effectuée";
else echo "souci !";

?>