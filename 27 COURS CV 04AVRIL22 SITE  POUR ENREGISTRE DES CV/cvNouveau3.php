dexuième étape
 récap de votre saisie
 : 
 <?php 
 
 extract($_GET); ?>
<form action="index.php?lien=cvNouveau3b&email=<?php echo $email; ?>&nom=<?php echo $nom; ?>&prenom=<?php echo $prenom; ?>" method="post">
<table class="cvNouveauSaisie">


<tr> 
	<td>nom : </td>
	<td> <?php echo $nom; ?> </td>
</tr>
<tr> 
	<td>prenom </td>
	<td> <?php echo $prenom; ?> </td>
</tr>
</table>
Saisie nouvelle expérience
<table class="cvNouveauSaisie">
	<tr>
		<td>
			
		</td>
		<td><?php require "connexion.php"; ?>	
			<select name="typeDiplome">
				<?php 
					$sql = "select nom from diplome";
					$req = mysqli_query($lien, $sql);
					while($ligne = mysqli_fetch_array($req)){ ?>
						<option value="<?php echo $ligne["nom"]; ?>">
						<?php echo $ligne["nom"]; ?></option>
						
					<?php }
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			libelle diplôme
		</td>
		<td>
			<input type="text" name="libDiplome" />
		</td>
	</tr>
	<tr>
		<td>
			lieu : 
		</td>
		<td>
			<input type="text" name="lieu" />
		</td>
	</tr>
	<tr>
		<td>obtenu ? 
			 
		</td>
		<td>
			<input type="checkbox" name="obtenu" />
		</td>
	</tr>
	<tr>
		<td>
			date début : 
		</td>
		<td>
			<input type="date" name="dateDeb" />
			
		</td>
	</tr>
	<tr>
		<td>
			date fin: 
		</td>
		<td>
			<input type="date" name="dateFin" />
			
		</td>
	</tr>
	
	<tr>
		<td colspan="2" class="tdEnvoyer">
			<button type="submit">ajouter </button>
		</td>
		
	</tr>
</table>
</form>