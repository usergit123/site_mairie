<?php
	$unControleur->setTable("publique");
	$lesLignes = $unControleur->selectALL();
	if(isset($_POST['valider']))
	{
		//$recherche = $_POST['recherche'];
		
		echo $_POST['recherche'];
		
		$champs = array("*"); 
		//var_dump($champs);
		$where = array("ville"=>$_POST['recherche'],"codePostal"=>$_POST['recherche'],"prix"=>$_POST['recherche'],
		"reduction"=>$_POST['recherche']); 
		$operateur = " or "; 					
		$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
	}
	
?>
<center>
<table>
<tr><td style="vertical-align:top;">
<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
<h3> Cantines publiques </h3>

<thead>
				<tr>
					<th>Ville </th> 
					<th>Code Postal</th> 
					<th>Prix</th> 
					<th>Reduction</th>
				</tr>
</thead>
<tbody>					
					<?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['ville']."</td>
						<td>".$uneLigne['codePostal']."</td>
						<td>".$uneLigne['prix']."</td>
						<td>".$uneLigne['reduction']."</td>
						</tr>";
					}
					?>
</tbody>			
					</table>
</td>


<td width="100px"></td>


<td style="vertical-align:top;">
<?php
	$unControleur->setTable("privee");
	$lesLignes = $unControleur->selectALL();
	if(isset($_POST['valider']))
	{
		//$recherche = $_POST['recherche'];
		
		$champs = array("*"); 
		//var_dump($champs);
		$where = array("ville"=>$_POST['recherche'],"codePostal"=>$_POST['recherche'],"prix"=>$_POST['recherche'],
		"bourse"=>$_POST['recherche']); 
		$operateur = " or "; 					
		$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
	}
?>

<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
<h3> Cantines privées </h3>

<thead>
				<tr>
					<th>Ville </th> 
					<th>Code Postal</th> 
					<th>Prix</th> 
					<th>Bourse</th>
				<tr>
</thead>
<tbody>					
					<?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['ville']."</td>
						<td>".$uneLigne['codePostal']."</td>
						<td>".$uneLigne['prix']."</td>
						<td>".$uneLigne['bourse']."</td>
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