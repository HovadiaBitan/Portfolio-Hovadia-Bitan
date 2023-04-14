	<?php 
		if (@$_GET['erreur'])
			if ($_GET['erreur'] == 'non-inscrit')
				echo "inscrivez-vous !"
	?>
	<form action="index.php?mvc=controleur&module=c_inscription" method="post">
     <table>  
		<tr>
           
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>nom
			</td>
				<td>
					<input type="text" name="nom" required />
				</td>
			</tr>
            <tr>
				<td>prenom
				</td>
				<td>
				<input type="text" name="prenom" required />
			</td>
			</tr>
			<tr>
					<td>nomRue
					</td>
					<td>
						<input type="text" name="nomRue" required />
					</td>
			</tr>
            <tr>
            <td>numéro de Rue
               
            </td>
			<td>
				<input type="number" name="numRue" required />
			</td>
          </tr>
            <tr>
            <td>ville
               
            </td>
			<td>
				<input type="text" name="ville" required />
			</td>
          </tr>
            <tr>
            <td>cp
               
            </td>
			<td>
				<input type="number" name="cp"  minlength="5" maxlength="5" required />
			</td>
			</tr>
            <tr>
            <td>email
               
            </td>
			<td>
			<input type="email" name="email" required />
               
            </td>
          
          </tr>
          <tr>
               <td>password
                 
               </td>
			   <td>
			   <input type="password" name="password" required />
                 
               </td>
             
             </tr>
             <tr>
               <td>numTel
                  
               </td>
				<td>
                 <input type="tel" name="tel" minlength="10" maxlength="10" required />
               </td>
             </tr>
             
          </tr>
          <tr>
               <td colspan="2" style="horizon-align:center">
            <button>envoyer</button>
            </td>
          
          </tr>
        </table>
     

