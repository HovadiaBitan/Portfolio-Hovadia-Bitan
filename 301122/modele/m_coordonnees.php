<?php 
require "modele/connexion.php";
$sql = "select * from etudiant where email = '".$_SESSION["email"]."'";

var_dump($sql);

$req = mysqli_query($lien, $sql);
var_dump($req);
$coords = mysqli_fetch_array($req);
var_dump($coords);
var_dump($_GET["test"]);
?>