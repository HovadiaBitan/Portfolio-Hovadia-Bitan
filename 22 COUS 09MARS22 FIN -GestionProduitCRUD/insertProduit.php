
<form action="insertProduitBase.php" method="get">

	nom : <input type="text" name="nom" /><br />
	prix : <input type="numeric" name="prix" /><br />

	stock : <select name="stock">
		<option value="10">10 unités</option>
		<option value="20">20 unités</option>
		<option value="30">30 unités</option>
		<option value="40">40 unités</option>
		<option value="50">50 unités</option>
	</select>
	<br />
	
	
	catégorie : <select name="categ">
	<?php 
		require "connexion.php";
		
		$sql = "SELECT * FROM categ";
		
		$result = mysqli_query($lien, $sql);
		while ($ligne = mysqli_fetch_array($result)){
			
			
		
		
	?>
	
	
	
	
		<option value="<?php echo $ligne["id"]?>">
		<?php echo $ligne["nom"]; ?>
		</option>
		
	
	
	
		<?php } ?>
		
	</select>
	<button type="submit">insérer</button>
	



</form>