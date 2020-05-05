<h1> Supprimer une cantine </h1>
					<form method ="post" action ="">
					<table>
					
					<tr>
						<td>
						Cantine à supprimer : 
						</td>
						<td>
							<SELECT name="idC" size="1">
							<?php
							$unControleur->setTable("cantine");
							$resultats = $unControleur->selectALL();
							
							
							
							foreach ($resultats as $ligne)
									{
										echo"<option value ='".$ligne["idC"]."'>".$ligne["ville"]."</option>";
									}	 

								 ?>
								 </SELECT>
						</td>
					</tr>
					
					<tr>
						<td>
					<input type ="reset" name ="Annuler" value ="Annuler">
					<input type ="submit" name ="supprimer" value ="supprimer"><br/>
						</td>
					</tr>
					
					</table>
					
					</form>