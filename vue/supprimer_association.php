<h1> Supprimer une association </h1>
					<form method ="post" action ="">
					Association à supprimer : 
					<td><SELECT name="idA" size="1">
					<?php
					$connexion = mysqli_connect("localhost","root","","mairie");
					$requete="select * from association;";
					$resultats=mysqli_query($connexion,$requete);
					while ($ligne = mysqli_fetch_assoc($resultats))
							{
								echo"<option value ='".$ligne["idA"]."'>".$ligne["libelleA"]."</option>";
							}	 

						 ?>
						 </SELECT></td>
					<input type ="reset" name ="Annuler" value ="Annuler">
					<input type ="submit" name ="supprimer" value ="supprimer"><br/>
					</form>