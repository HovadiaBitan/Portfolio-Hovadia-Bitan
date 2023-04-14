<?php

require "connexion.php";

if (isset($_POST["prix"])) $prix = $_POST["prix"];
$nom = $_POST["nom"];
$stock = $_POST["stock"];
$id = $_POST["id"];

$sql = "";

if ($prix != ""){
$sql .= "update produit set prix = $prix where id= $id;";
}

if ($stock != "" || $stock >=0){
$sql .= "update produit set stock = $stock where id= $id;";
}

if ($nom != ""){
$sql .= "update produit set nom = $nom where id= $id;";
}

if ($req = mysqli_multi_query($lien, $sql)) echo "modif effectuée";
else echo "$sql problème";


?>