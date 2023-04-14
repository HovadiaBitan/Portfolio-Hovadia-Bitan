<?php

require "connexion.php";

$nom = $_GET["nom"];
$prix = $_GET["prix"];
$stock = $_GET["stock"];
$categ = $_GET["categ"];

$sql = "insert into produit (nom, prix, stock, idCateg) values ('$nom', $prix, $stock, $categ)";
//echo $sql;
$verif = mysqli_query($lien, $sql);


if ($verif == true) echo "enregistrement effectué";

?>