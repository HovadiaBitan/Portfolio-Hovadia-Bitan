<?php




?>
<form action="testFormulaire.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
<table border=1 style="margin:auto">
<tr>
	<td>nom  <?php //echo $_GET["nom"]; ?> </td>
	
	<td><input type="text" name="nom" />
	<?php if (isset($_GET["nom"])) { ?><td style="color:red">
	<?php echo "veuillez saisir le nom"; ?></td> <?php } ?>
</tr>

<tr>
	<td>age<?php //echo $_GET["prix"]; ?> </td>
	
	<td>
		<select name="age">
			<option value="select">choisir</option>
			<option value="12">12</option>
			<option value="13">13</option>
		<select>
	</td>
	<td style="color:red"><?php if (isset($_GET["age"])) echo "veuillez choisir un age"; ?></td>
</tr>

<tr>
	<td>genre<?php //echo $_GET["stock"]; ?> </td>
	
	<td>h<input type="radio" name="genre" value="h"/> 
	f <input type="radio" name="genre" value="f"/> 
	</td>
	<td style="color:red"><?php if (isset($_GET["genre"])) echo "veuillez cocher le genre"; ?></td>
</tr>



<tr>
	<td colspan=3 style="text-align:center">
	<button type="submit">envoyer</button>
	</td>
</tr>

</table>

</form>
