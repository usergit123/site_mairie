<h1> Inscription à un événement </h1>
					<form method ="post" action ="">
					<table>
					
					<tr>
						<td>
						Choisissez un événement : 
						</td>
						<td>
							<SELECT name="idEV" size="1">
							<?php
							$unControleur->setTable("evenement");
							$resultats = $unControleur->selectALL();
							
							
							
							foreach ($resultats as $ligne)
									{
										echo"<option value ='".$ligne["idEV"]."'>".$ligne["libelle"]."</option>";
									}	 

								 ?>
								 </SELECT>
						</td>
					</tr>
					
					<tr>
						<td>
					<input type ="reset" name ="Annuler" value ="Annuler">
					<input type ="submit" name ="inscription" value ="inscription"><br/>
						</td>
					</tr>
					
					</table>
					
					</form>
					
<?php
	
	if(isset($_POST['inscription']))
	{
		$unControleur->setTable("assister");
		$tab = array("idP"=>$_SESSION['idP'],"idEV"=>$_POST['idEV'],"dateEV"=>"curdate()");
		$unControleur->insertAssister($_SESSION['idP'],$_POST['idEV']);
		
	}
	
?>
