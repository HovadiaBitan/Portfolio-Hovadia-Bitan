<link rel="stylesheet" href="style.css"/>
<?php 
require "connexion.php"; 

$sql = "select * from produit";

$req = mysqli_query($lien, $sql);



if(!$req){echo "pb base de données"; exit();}

echo "<table border=1>";

?>

<tr>
	<th>nom</th>
	<th>prix</th>
	<th>stock</th>
	<th>gérer</th>
	
</tr>

<?php

while ($ligne = mysqli_fetch_array($req)){
	echo "<tr>";
	
	
	echo "<td>".$ligne["nom"]."</td>";
	
	echo "<td>".$ligne["prix"]."€</td>";
	
	echo "<td>".$ligne["stock"]."</td>";
	
	?> <td>
	<a href="gestionProduit.php?<?php echo 'id='.$ligne["id"].'&nom='.$ligne["nom"].'&prix='.$ligne["prix"].'&stock='.$ligne["stock"]; ?>">
	<img src="modifier.png" onmouseover = "this.style.width = 60" onmouseout = "this.style.width=50"/></a>
	</td>
	<?php echo "</tr>";
}

echo "</table>";
	


?>