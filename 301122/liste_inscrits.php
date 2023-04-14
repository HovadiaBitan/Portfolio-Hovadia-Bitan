<table>

kk

<tr>
	<th><a href="javascript:"><img src="img/fleche_haut.jpeg" class="menu"></a>
	<a href="javascript:"><img src="img/fleche_bas.jpeg" class="menu"></a>nom
	</th>
	<th>prenom
	</th>
	<th>email
	</th>
	<th>téléphone
	</th>
	<th>PROFIL
	</th>
	<th>progression
	</th>
	
</tr>

<?php require "modele/connexion.php"; 

$sql = "select * from etudiant limit 0,15";
$req = mysqli_query($lien, $sql);
while ($ligne = mysqli_fetch_array($req)){
?>

<tr>
	<td><?php echo $ligne["nom"]; ?>
	</td>
	<td>titi
	</td>
	<td>email
	</td>
	<td>téléphone
	</td>
	<td>bouton ou lien
	</td>
	<td>progression
	</td>
	
</tr>
<?php } ?>



</table>