<h1> Supprimer un mariage </h1>
					<form method ="post" action ="">
					Mariage à supprimer : 
					<input type="text" name="idP1" value="idP1">
					<input type="text" name="idP2" value="idP2">
					<?php
					$connexion = mysqli_connect("localhost","root","","mairie");
					$requete="select * from mariage;";
					$resultats=mysqli_query($connexion,$requete);
					while ($ligne = mysqli_fetch_assoc($resultats))
							{
								echo"<option value ='".$ligne["idP1"]."'>".$ligne["idP2"]."</option>";
							}	 

						 ?>
						 </SELECT></td>
					<input type ="reset" name ="Annuler" value ="Annuler">
					<input type ="submit" name ="supprimer" value ="supprimer"><br/>
					</form>