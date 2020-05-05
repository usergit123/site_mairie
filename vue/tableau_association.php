					
					<center>
					<h3> Voici les associations </h3>
					
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
					
<thead>					
			<tr>	
					 <th> Nom : </th>
					 <th> Adresse :</th> 
					 <th> Téléphone : </th>
					 <th> Code postal :</th>
					 <th> Date : </th> 
			</tr>
</thead>
<tbody>
					 <?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['libelleA']." </td>
						<td> ".$uneLigne['adresse']." </td>
						<td>".$uneLigne['tel']." </td>
						<td>".$uneLigne['codeP']." </td>
						<td>".$uneLigne['dateA']."</td>
						</tr>";
					}
					?>
</tbody>
					</table>
					</center>
					
					</br>
					</br>