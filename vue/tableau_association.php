					
					<center>
					<h3> Voici les associations </h3>
					
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
					
<thead>					
			<tr>	
					 <th> Nom </th>
					 <th> adresse </th> 
					 <th> tel </th>
					 <th> code postal </th> 
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
						</tr>";
					}
					?>
</tbody>
					</table>
					</center>
					
					</br>
					</br>