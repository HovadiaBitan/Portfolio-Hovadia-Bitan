<?php




?>
<form action="modifProduit.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
<table border=1>
<tr>
	<td>nom du produit : <?php echo $_GET["nom"]; ?> </td>
	<td> changer pour : </td>
	<td><input type="text" name="nom" />
</tr>

<tr>
	<td>prix du produit : <?php echo $_GET["prix"]; ?> </td>
	<td> changer pour : </td>
	<td><input type="text" name="prix" />
</tr>

<tr>
	<td>stock du produit : <?php echo $_GET["stock"]; ?> </td>
	<td> changer pour : </td>
	<td><input type="text" name="stock" />
</tr>

<tr>
	<td colspan=3 style="text-align:center">
	<a href="supprimerProduit.php?id=<?php echo $_GET["id"]; ?>">supprimer complètement ce produit</a></td>
</tr>

<tr>
	<td colspan=3 style="text-align:center">
	<button type="submit">envoyer</button>
	</td>
</tr>

</table>

</form>
