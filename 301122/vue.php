
vue
	<?php
		if (isset($_GET["module"]))
			{
				switch ($_GET["module"]){
					
					case 'inscription':require 'inscription.php';break;
					case 'liste_inscrits':require "liste_inscrits.php";break;
					case 'connexion':require "v_connexion.php";break;
					case 'coordonnees':require "coordonnees.php";
					
				}
				
			}

			
	?>

