<table class="cvNouveauSaisie">
	<tr>
		<td colspan="2">Titre du cv</td>
	</tr>
	<tr>
		<td>nom</td>		<td>prénom</td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="image/cv/scrat.jpg" />
		</td>
	</tr>
	<?php
	require "connexion.php";
		
		$sql = "select * from cvCompetence where email='legrispelerin@ebuyclub.com'";
		
		$req = mysqli_query($lien, $sql);
		var_dump($sql);
		while ($ligne = mysqli_fetch_array($req)){
			
	?>
	<tr>
		<td> 
			<?php echo $ligne["nomCompetence"]; ?>
		</td>
		<td>
			<?php echo $ligne["niveau"]; ?>
		</td>
	</tr>
	
		<?php } ?>
	
	
</table>

<?php

	/*$sql = "select * from cv where email = 'legrispelerin@ebuyclub.com'";
	
	$req = mysqli_query($lien, $sql);
	
	while($ligne = mysqli_fetch_array($req)){
		
		echo "<tr><td colspan='2'>";
		echo $ligne["titre"];
		echo "</td></tr>";
		
		
		
		
		.$ligne["nomCompetence"]."</option>";
		
	}
	*/
	?>

