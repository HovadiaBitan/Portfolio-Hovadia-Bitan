

	<?php
		if (isset($_GET["module"]))
			{
				switch ($_GET["module"]){
					
					case 'c_inscription':require 'controleur/c_inscription.php';break;
					case 'c_connexion':require 'controleur/c_connexion.php';break;
					
					
				}
				
			}

			
	?>

