<div id="main">

main
	<?php
		if (isset($_GET["mvc"]))
			{
				switch ($_GET["mvc"]){
					
					case 'modele':require 'modele/modele.php';break;
					case 'controleur':require 'controleur/controleur.php';break;
					case 'vue':require 'vue.php';break;
				}
				
			}

			
	?>

</div>