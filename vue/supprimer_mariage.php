<h1> Supprimer un mariage </h1>
					<form method ="post" action ="">
					Mariage à supprimer : 
					
					
					<SELECT name="idP1" size="1">
					<?php
					$unControleur->setTable("mariage");
					$resultats = $unControleur->selectALL();
					
					
					foreach ($resultats as $ligne)
							{
								echo"<option value ='".$ligne["idP1"]."'>".$ligne["idP1"]."</option>";
							}	 

						 ?>
						 </SELECT></td>
					<input type ="reset" name ="Annuler" value ="Annuler">
					<input type ="submit" name ="supprimer" value ="supprimer"><br/>
					</form>