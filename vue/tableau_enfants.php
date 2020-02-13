 <table border=1>
					<tr><td> id enfant </td>
					 <td> id parents </td>
					 <td> id cantine </td>
					 <td> Nom </td>
					 <td> Prénom </td>
					 <td> Sexe </td>
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
				</br>
				</br>