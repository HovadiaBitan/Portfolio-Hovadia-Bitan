<html lang="fr">
<head>
<title>
	gestion de cv
</title>
	
<link rel="stylesheet" href="css/style.css?<?php $t = time();echo $t; ?>" />

<!--<meta http-equiv="refresh" content="5;">-->
</head>
<!-- l'index est composé de 3 sections, chacune étant gérée par une page php. la partie importante est dans main.php, mais il faut d'abord aller voir header.php -->
<body>
	
	<header>
		<?php require "header.php"; ?>
	</header>
	
	<main>
		<?php require "main.php"; ?>
	</main>
	
	<footer>
		<?php require "footer.php"; ?>
	</footer>
</body>




</html>