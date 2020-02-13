<h1> Supprimer un loisir </h1>
					<form method ="post" action ="">
					Loisir à supprimer : 
					<td><SELECT name="idL" size="1">
					<?php
					$connexion = mysqli_connect("localhost","root","","mairie");
					$requete="select * from loisir;";
					$resultats=mysqli_query($connexion,$requete);
					while ($ligne = mysqli_fetch_assoc($resultats))
							{
								echo"<option value ='".$ligne["idL"]."'>".$ligne["libelle"]."</option>";
							}	 

						 ?>
						 </SELECT></td>
					<input type ="reset" name ="Annuler" value ="Annuler">
					<input type ="submit" name ="supprimer" value ="supprimer"><br/>
					</form>