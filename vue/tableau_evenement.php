<?php
	$unControleur->setTable("interieur");
	$lesLignes = $unControleur->selectALL();
	if(isset($_POST['valider']))
	{
		//$recherche = $_POST['recherche'];
		
		echo $_POST['recherche'];
		
		$champs = array("*"); 
		//var_dump($champs);
		$where = array("idEV"=>$_POST['recherche'],"lieu"=>$_POST['recherche'],"libelle"=>$_POST['recherche'],
		"dateEV"=>$_POST['recherche'],"superficie"=>$_POST['recherche']); 
		$operateur = " or "; 					
		$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
	}
	
?>
<center>
<table>
<tr><td style="vertical-align:top;">
<table border=1>
<h3> Événements intérieurs </h3>
					<tr><td>Lieu </td> <td>Libelle</td> <td>Date</td> <td>Superficie</td>
					
					<?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['lieu']."</td>
						<td>".$uneLigne['libelle']."</td>
						<td>".$uneLigne['dateEV']."</td>
						<td>".$uneLigne['superficie']."</td>
						</tr>";
					}
					?>
					
					</table>
</td>


<td width="100px"></td>


<td style="vertical-align:top;">
<?php
	$unControleur->setTable("exterieur");
	$lesLignes = $unControleur->selectALL();
	if(isset($_POST['valider']))
	{
		//$recherche = $_POST['recherche'];
		
		$champs = array("*"); 
		//var_dump($champs);
		$where = array("idEV"=>$_POST['recherche'],"lieu"=>$_POST['recherche'],"libelle"=>$_POST['recherche'],
		"dateEV"=>$_POST['recherche'],"meteo"=>$_POST['recherche']); 
		$operateur = " or "; 					
		$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
	}
?>

<table border=1>
<h3> Événements extérieur </h3>
					<tr><td>Lieu </td> <td>Libelle</td> <td>Date</td> <td>Météo</td>
					
					<?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['lieu']."</td>
						<td>".$uneLigne['libelle']."</td>
						<td>".$uneLigne['dateEV']."</td>
						<td>".$uneLigne['meteo']."</td>
						</tr>";
					}
					?>
					
					</table>
</td>
</tr>
</table>
</center>

</br></br>