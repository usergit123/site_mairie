					<center>
					<h3>Voici vos enfants:<h3>
					
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
					
					
					<tr><th> id enfant </th>
					 <th> id parents </th>
					 <th> id cantine </th>
					 <th> Nom </th>
					 <th> Prénom </th>
					 <th> Sexe </th>
					 <?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['idE']." </td>
						<td> ".$uneLigne['idP']." </td>
						<td>".$uneLigne['idC']." </td>
						<td>".$uneLigne['nomE']." </td>
						<td>".$uneLigne['prenomE']." </td>
						<td>".$uneLigne['sexe']." </td>
						</tr>";
					}
					?>
				</table>
				</center>
				
				</br>
				</br>