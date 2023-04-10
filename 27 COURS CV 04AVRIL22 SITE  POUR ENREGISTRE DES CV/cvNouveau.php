<form action="index.php?lien=cvNouveau1" method="post">
<table class="cvNouveauSaisie">
	<tr>
		<td>
			titre du cv 
		</td>
		<td>
			<input type="text" name="titre" />
		</td>
	</tr>
	<tr>
		<td>
			email
		</td>
		<td>
			<input type="email" name="email" />
		</td>
	</tr>
	<tr>
		<td>
			telephone
		</td>
		<td>
			<input type="text" min="9" name="telephone" />
		</td>
	</tr>
	<tr>
		<td>
			nom
		</td>
		<td>
			<input type="text" name="nom" />
		</td>
	</tr>
	<tr>
		<td>
			prénom <?php if (isset($_GET["nom"])){ ?><span class="errForm">prénom vide</span><?php } ?>
		</td>
		<td>
			<input type="text" name="prenom" />
		</td>
	</tr>
	<tr>
		<td>
			photo cv
		</td>
		<td>
			<input type="text" name="photo" />
		</td>
	</tr>
	<tr>
		<td colspan = "2">
			Adresse
		</td>
	</tr>
	<tr>
		<td>
			numéro de la rue
		</td>
		<td>
			<input type="text" name="numRue" />
		</td>
	</tr>
	<tr>
		<td>
			nom de la rue
		</td>
		<td>
			<input type="text" name="nomRue" />
		</td>
	</tr>
	<tr>
		<td>
			code postal
		</td>
		<td>
			<input type="text" name="codePostal" />
		</td>
	</tr>
	<tr>
		<td>
			Ville
		</td>
		<td>
			<input type="text" name="ville" />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			Permis
		</td>
		
	</tr>
	<tr>
		<td>
			permis ?
		</td>
		<td>
			<input type="texte" name="permis" />
		</td>
	</tr>
	<tr>
		<td>
			date d'obtention du permis
		</td>
		<td>
			<input type="date" name="datePermis" />
		</td>
	</tr>
	<tr>
		<td>
			Centres d'intérêt
		</td>
		<td>
			<textarea  name="centreInteret" >
			</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="tdEnvoyer">
			<button>continuer</button>
		</td>
		
	</tr>
</table>
</form>