dexuième étape
 récap de votre saisie
 : 
 <?php extract($_GET); ?>
<form action="index.php?lien=cvNouveau2b&email=<?php echo $email; ?>&nom=<?php echo $nom; ?>&prenom=<?php echo $prenom; ?>" method="post">
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
			nom de l'expérience
		</td>
		<td>
			<input type="text" name="nomExp" />
		</td>
	</tr>
	<tr>
		<td>
			lieu : 
		</td>
		<td>
			<input type="text" name="lieuExp" />
		</td>
	</tr>
	<tr>
		<td>
			description 
		</td>
		<td>
			<textarea maxlength="600" name="descExp" />
			</textarea >
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
		<td>
			Code postal : 
		</td>
		<td>
			<input type="text" size="5" maxlength="5" name="codePostal" />
		</td>
	</tr>
	<tr>
		<td>
			Ville : 
		</td>
		<td>
			<input type="text" name="ville" />
		</td>
	</tr>
	<tr>
		<td colspan="2" class="tdEnvoyer">
			<button type="submit">ajouter </button>
		</td>
		
	</tr>
</table>
</form>