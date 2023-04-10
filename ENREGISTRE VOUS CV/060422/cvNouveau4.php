<?php
require "connexion.php";
$sql = "select nomCompetence from competence"; 

$req = mysqli_query($lien, $sql);
$email = $_GET["email"];
?>
<form action = "index.php?lien=cvNouveau4b&email=<?php echo $email; ?>" method="post">
<table class="cvNouveauSaisie">
<tr><td>
<select name="competence">
	<?php
	while($ligne = mysqli_fetch_array($req)){
		
		echo "<option value=\"".$ligne["nomCompetence"]."\">".$ligne["nomCompetence"]."</option>";
		
	}

	?>
</select>
</td></tr>

<tr>
		<td>
			<select name="niveau">
			
			<option value="debutant">débutant</option> 
			<option value="expert">expert</option>
			</select>
		</td>
		
	</tr>

<tr>
		<td class="tdEnvoyer">
			<button type="submit">ajouter </button>
		</td>
		
	</tr>

</table>
<form>
<?php
mysqli_close($lien);
?>