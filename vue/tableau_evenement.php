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
<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
<h3> Événements intérieurs </h3>

<thead>
				<tr>
					<th>Libelle </th> 
					<th>Lieu</th> 
					<th>Date</th> 
					<th>Superficie</th>
				</tr>
</thead>
<tbody>					
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
</tbody>			
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

<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
<h3> Événements extérieur </h3>

<thead>
				<tr>
					<th>Libelle </th> 
					<th>Lieu</th> 
					<th>Date</th> 
					<th>Météo</th>
				<tr>
</thead>
<tbody>					
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
</tbody>					
					</table>
</td>
</tr>
</table>
</center>

</br></br>