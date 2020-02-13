					
					<h3> Voici les associations </h3>
					<table border=1>
					<tr><td> libelleA </td>
					 <td> adresse </td> 
					 <td> tel </td>
					 <td> codeP </td> 

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
					</table>
					</br>
					</br>