<?php 
var_dump($_SESSION);
if (!$_SESSION["email"]) 
	header('Location:index.php?mvc=vue&module=inscription&erreur=non-inscrit');

require "modele/m_coordonnees.php?test=test";
?>

modif.php
<style>
a{color:yellow;}
</style>
<form action="index.php?mvc=controleur&module=c_coordonnees" method="post">
     <table>  
		<tr>
           
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>nom
			</td>
				<td>
					<input type="text" id="nom" name="nom" value="<?php echo @$coords["nom"]; ?>" required disabled />  Vous souhaitez modifier votre nom <a href="javascript:activerChamp('nom');">modif</a> 
			</tr>
           
            <tr>
				<td>prenom
				</td>
				<td> 
				<input type="text" name="prenom" required disabled id="prenom"/> Vous souhaitez modifier votre prenom <a href="javascript:activerChamp('prenom');">modif</a> 
			</td> 
			</tr>
           
			<tr>
					<td>nomRue
					</td>
					<td>
						<input id="nomRue" type="text" name="nomRue" required disabled />  Vous souhaitez modifier votre nom de rue <a href="javascript:activerChamp('nomRue');">modif</a> 
					</td>
			</tr>
            
            <tr>
            <td>numéro de Rue
               
            </td>
			<td>
				<input type="number" name="numRue" required disabled />  Vous souhaitez modifier votre numero de rue <a href="">modif</a> 
			</td>
          </tr>
          
            <tr>
            <td>ville
               
            </td>
			<td>
				<input type="text" name="ville" required disabled />  Vous souhaitez modifier votre ville <a href="">modif</a> 
			</td>
          </tr>
          
            <tr>
            <td>cp
               
            </td>
			<td>
				<input type="number" name="cp"  minlength="5" maxlength="5" required disabled />  Vous souhaitez modifier votre code postal <a href="">modif</a> 
			</td>
			</tr>
            
            <tr>
			
            <td>email
               
            </td>
			<td>
			<input type="email" name="email" required disabled />  Vous souhaitez modifier votre email <a href="">modif</a> 
               
            </td>
          
          </tr>
          
          <tr>
               <td>password
                 
               </td>
			   <td>
			   <input type="password" name="password" required disabled />  Vous souhaitez modifier votre password <a href="">modif</a> 
                 
               </td>
             
             </tr>
             
             <tr>
               <td>numTel
                  
               </td>
				<td>
                 <input type="tel" name="tel" minlength="10" maxlength="10" required disabled />  Vous souhaitez modifier votre numero de telephone <a href="">modif</a> 
               </td>
             </tr>
             
          </tr>
          <tr>
               <td colspan="2" style="horizon-align:center">
            <button>envoyer</button>
            </td>
          
          </tr>
        </table>
		
		<script>
			function activerChamp(champ){
				truc = document.getElementById(champ);
				if (truc.disabled)
					truc.disabled = false;
				else
					truc.disabled = true;
				//document.getElementById(champ).disabled = false
				
			}
		</script>
     